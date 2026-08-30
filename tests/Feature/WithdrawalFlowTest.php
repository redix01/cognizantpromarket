<?php

namespace Tests\Feature;

use App\Mail\UserActionMail;
use App\Models\PlatformSetting;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Withdrawal;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class WithdrawalFlowTest extends TestCase
{
    use RefreshDatabase;

    protected User $user;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create([
            'account_tier' => 'user',
            'kyc_level' => 'verified',
        ]);

        Wallet::factory()->create([
            'user_id' => $this->user->id,
            'currency' => 'USD',
            'balance' => 10000,
        ]);
    }

    public function test_user_can_view_withdrawal_page(): void
    {
        $this->actingAs($this->user)
            ->get(route('withdraw'))
            ->assertOk();
    }

    public function test_withdrawal_requests_are_visible_to_user_and_admin(): void
    {
        $admin = User::factory()->create(['account_tier' => 'admin']);
        Withdrawal::factory()->create([
            'user_id' => $this->user->id,
            'amount' => 250,
            'fee' => 2.5,
            'net_amount' => 247.5,
            'currency' => 'USD',
            'status' => 'pending',
        ]);

        $this->actingAs($this->user)
            ->get(route('withdraw'))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->component('Withdraw')
                ->has('history', 1, fn ($withdrawal) => $withdrawal
                    ->where('amount', '250.00')
                    ->where('currency', 'USD')
                    ->where('status', 'pending')
                    ->etc()
                )
            );

        $this->actingAs($this->user)
            ->get(route('dashboard'))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->component('Dashboard')
                ->has('recentWithdrawals', 1, fn ($withdrawal) => $withdrawal
                    ->where('amount', '250.00')
                    ->where('status', 'pending')
                    ->etc()
                )
            );

        $this->actingAs($admin)
            ->get(route('admin.dashboard'))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->component('Admin/Dashboard')
                ->has('pendingWithdrawals', 1, fn ($withdrawal) => $withdrawal
                    ->where('amount', '250.00')
                    ->where('currency', 'USD')
                    ->etc()
                )
            );

        $this->actingAs($admin)
            ->get(route('admin.withdrawals.index'))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->component('Admin/Withdrawals/Index')
                ->has('withdrawals.data', 1, fn ($withdrawal) => $withdrawal
                    ->where('status', 'pending')
                    ->where('currency', 'USD')
                    ->etc()
                )
            );
    }

    public function test_user_can_submit_withdrawal(): void
    {
        Mail::fake();
        PlatformSetting::create([
            'key' => 'withdrawal_fee',
            'value' => '3.5',
            'group' => 'Fees',
            'type' => 'number',
        ]);

        $this->actingAs($this->user)
            ->post(route('withdraw.store'), [
                'method' => 'wallet',
                'amount' => 500,
                'currency' => 'USD',
                'destination' => ['wallet_address' => '0x1234567890abcdef'],
            ])->assertSessionHas('success');

        $this->assertDatabaseHas('withdrawals', [
            'user_id' => $this->user->id,
            'amount' => 500,
            'fee' => 17.5,
            'net_amount' => 482.5,
            'status' => 'pending',
        ]);

        Mail::assertSent(UserActionMail::class, function (UserActionMail $mail) {
            return $mail->hasTo('admin@wexmarket.com')
                && $mail->subjectLine === 'New withdrawal request';
        });

        Mail::assertSent(UserActionMail::class, function (UserActionMail $mail) {
            return $mail->hasTo($this->user->email)
                && $mail->subjectLine === 'Withdrawal request submitted';
        });
    }

    public function test_user_can_submit_bank_transfer_withdrawal_with_blank_sibling_fields(): void
    {
        // The Withdraw.tsx form always submits every destination key (bank_name,
        // account_name, account_number, routing_number, wallet_address,
        // paypal_email), leaving the ones not relevant to the chosen method as
        // empty strings rather than omitting them. Laravel's
        // ConvertEmptyStringsToNull middleware turns those into null, so the
        // validation rules must tolerate null on the not-applicable siblings.
        Mail::fake();

        $this->actingAs($this->user)
            ->post(route('withdraw.store'), [
                'method' => 'Bank Transfer',
                'amount' => 200,
                'currency' => 'USD',
                'destination' => [
                    'bank_name' => 'Chase Bank',
                    'account_name' => 'Test User',
                    'account_number' => '123456789',
                    'routing_number' => '',
                    'wallet_address' => '',
                    'paypal_email' => '',
                ],
            ])
            ->assertSessionHasNoErrors()
            ->assertSessionHas('success');

        $this->assertDatabaseHas('withdrawals', [
            'user_id' => $this->user->id,
            'method' => 'Bank Transfer',
            'amount' => 200,
            'status' => 'pending',
        ]);
    }

    public function test_user_can_submit_paypal_withdrawal_with_blank_sibling_fields(): void
    {
        $this->actingAs($this->user)
            ->post(route('withdraw.store'), [
                'method' => 'PayPal',
                'amount' => 150,
                'currency' => 'USD',
                'destination' => [
                    'bank_name' => '',
                    'account_name' => '',
                    'account_number' => '',
                    'routing_number' => '',
                    'wallet_address' => '',
                    'paypal_email' => 'payout@example.com',
                ],
            ])
            ->assertSessionHasNoErrors()
            ->assertSessionHas('success');

        $this->assertDatabaseHas('withdrawals', [
            'user_id' => $this->user->id,
            'method' => 'PayPal',
            'amount' => 150,
            'status' => 'pending',
        ]);
    }

    public function test_withdrawal_respects_admin_minimum_limit(): void
    {
        PlatformSetting::create([
            'key' => 'min_withdrawal',
            'value' => '250',
            'group' => 'Limits',
            'type' => 'number',
        ]);

        $this->actingAs($this->user)
            ->post(route('withdraw.store'), [
                'method' => 'wallet',
                'amount' => 100,
                'currency' => 'USD',
                'destination' => ['wallet_address' => '0x1234567890abcdef'],
            ])
            ->assertSessionHasErrors(['amount']);
    }

    public function test_withdrawal_respects_admin_maximum_limit(): void
    {
        PlatformSetting::create([
            'key' => 'max_withdrawal',
            'value' => '300',
            'group' => 'Limits',
            'type' => 'number',
        ]);

        $this->actingAs($this->user)
            ->post(route('withdraw.store'), [
                'method' => 'wallet',
                'amount' => 350,
                'currency' => 'USD',
                'destination' => ['wallet_address' => '0x1234567890abcdef'],
            ])
            ->assertSessionHasErrors(['amount']);
    }

    public function test_admin_can_approve_withdrawal(): void
    {
        Mail::fake();
        $admin = User::factory()->create(['account_tier' => 'admin']);
        $withdrawal = Withdrawal::factory()->create([
            'user_id' => $this->user->id,
            'status' => 'pending',
        ]);

        $this->actingAs($admin)
            ->post(route('admin.withdrawals.approve', $withdrawal->id))
            ->assertSessionHas('success');

        $this->assertEquals('approved', $withdrawal->fresh()->status);

        Mail::assertSent(UserActionMail::class, function (UserActionMail $mail) {
            return $mail->hasTo($this->user->email)
                && $mail->subjectLine === 'Withdrawal approved';
        });
    }

    public function test_admin_sees_all_withdrawals_in_index(): void
    {
        $admin = User::factory()->create(['account_tier' => 'admin']);

        $this->actingAs($this->user)
            ->post(route('withdraw.store'), [
                'method' => 'wallet',
                'amount' => 250,
                'currency' => 'USD',
                'destination' => ['wallet_address' => '0xabc'],
            ])->assertSessionHas('success');

        $this->actingAs($admin)
            ->get(route('admin.withdrawals.index'))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->component('Admin/Withdrawals/Index')
                ->has('withdrawals.data', 1, fn ($w) => $w
                    ->where('status', 'pending')
                    ->where('amount', '250.00')
                    ->where('currency', 'USD')
                    ->where('user.name', $this->user->name)
                    ->etc()
                )
            );
    }

    public function test_admin_dashboard_shows_pending_withdrawals(): void
    {
        $admin = User::factory()->create(['account_tier' => 'admin']);

        $this->actingAs($this->user)
            ->post(route('withdraw.store'), [
                'method' => 'wallet',
                'amount' => 300,
                'currency' => 'USD',
                'destination' => ['wallet_address' => '0xabc'],
            ])->assertSessionHas('success');

        $this->actingAs($admin)
            ->get(route('admin.dashboard'))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->component('Admin/Dashboard')
                ->has('pendingWithdrawals', 1, fn ($w) => $w
                    ->where('amount', '300.00')
                    ->where('currency', 'USD')
                    ->where('user_name', $this->user->name)
                    ->etc()
                )
            );
    }

    public function test_admin_can_reject_withdrawal(): void
    {
        Mail::fake();
        $admin = User::factory()->create(['account_tier' => 'admin']);

        $this->actingAs($this->user)
            ->post(route('withdraw.store'), [
                'method' => 'wallet',
                'amount' => 500,
                'currency' => 'USD',
                'destination' => ['wallet_address' => '0x1234567890abcdef'],
            ])
            ->assertSessionHas('success');

        $withdrawal = Withdrawal::where('user_id', $this->user->id)->firstOrFail();
        $this->assertEquals('9500.00000000', $this->user->wallets()->where('currency', 'USD')->firstOrFail()->balance);

        $this->actingAs($admin)
            ->post(route('admin.withdrawals.reject', $withdrawal->id), [
                'reason' => 'Suspicious activity',
            ])->assertSessionHas('success');

        $this->assertEquals('rejected', $withdrawal->fresh()->status);
        $this->assertEquals('10000.00000000', $this->user->wallets()->where('currency', 'USD')->firstOrFail()->balance);
    }
}
