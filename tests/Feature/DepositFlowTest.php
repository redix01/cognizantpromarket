<?php

namespace Tests\Feature;

use App\Mail\UserActionMail;
use App\Models\Deposit;
use App\Models\DepositMethod;
use App\Models\MarketPair;
use App\Models\User;
use App\Models\Wallet;
use App\Services\CoinMarketCapService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class DepositFlowTest extends TestCase
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

        DepositMethod::factory()->create(['id' => 1, 'currency' => 'USD']);
    }

    public function test_user_can_view_deposit_page(): void
    {
        $this->actingAs($this->user)
            ->get(route('deposit'))
            ->assertOk();
    }

    public function test_user_can_submit_deposit(): void
    {
        Mail::fake();
        Storage::fake('public');

        $this->actingAs($this->user)
            ->post(route('deposit.store'), [
                'deposit_method_id' => 1,
                'amount' => 1000,
                'currency' => 'USD',
                'proof' => UploadedFile::fake()->image('proof.jpg'),
            ])->assertSessionHas('success');

        $this->assertDatabaseHas('deposits', [
            'user_id' => $this->user->id,
            'amount' => 1000,
            'currency' => 'USD',
            'status' => 'pending',
        ]);

        Mail::assertSent(UserActionMail::class, function (UserActionMail $mail) {
            return $mail->hasTo('admin@wexmarket.com')
                && $mail->subjectLine === 'New deposit request';
        });
    }

    public function test_guest_cannot_submit_deposit(): void
    {
        $this->post(route('deposit.store'), [
            'deposit_method_id' => 1,
            'amount' => 1000,
            'currency' => 'USD',
        ])->assertRedirect(route('login'));
    }

    public function test_admin_can_approve_deposit(): void
    {
        Mail::fake();
        $admin = User::factory()->create(['account_tier' => 'admin']);
        $deposit = Deposit::factory()->create([
            'user_id' => $this->user->id,
            'status' => 'pending',
            'currency' => 'USD',
            'amount' => 1000,
            'fee' => 0,
            'net_amount' => 1000,
        ]);

        $wallet = Wallet::factory()->create([
            'user_id' => $this->user->id,
            'currency' => 'USD',
            'balance' => 2500,
        ]);

        $this->actingAs($admin)
            ->post(route('admin.deposits.approve', $deposit->id))
            ->assertSessionHas('success');

        $this->assertEquals('approved', $deposit->fresh()->status);
        $this->assertEquals('3500.00000000', $wallet->fresh()->balance);

        Mail::assertSent(UserActionMail::class, function (UserActionMail $mail) {
            return $mail->hasTo($this->user->email)
                && $mail->subjectLine === 'Deposit approved';
        });
    }

    public function test_approved_deposit_is_reflected_on_user_dashboard_balance(): void
    {
        $this->mock(CoinMarketCapService::class, function ($mock) {
            $mock->shouldReceive('syncMarketPairs')->andReturnNull();
        });

        MarketPair::create([
            'base_currency' => 'BTC',
            'quote_currency' => 'USDT',
            'current_price' => 65000,
            'price_change_24h' => 2.4,
            'high_24h' => 66000,
            'low_24h' => 64000,
            'volume_24h' => 1250000000,
            'market_cap' => 1300000000000,
            'is_active' => true,
            'sort_order' => 1,
            'icon' => 'https://assets.coingecko.com/coins/images/1/small/bitcoin.png',
        ]);

        $admin = User::factory()->create(['account_tier' => 'admin']);
        $deposit = Deposit::factory()->create([
            'user_id' => $this->user->id,
            'status' => 'pending',
            'currency' => 'USD',
            'amount' => 1500,
            'fee' => 0,
            'net_amount' => 1500,
        ]);

        $this->actingAs($admin)
            ->post(route('admin.deposits.approve', $deposit->id))
            ->assertSessionHas('success');

        $this->actingAs($this->user)
            ->get(route('dashboard'))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->component('Dashboard')
                ->where('kpi.total_balance', '1,500.00')
                ->has('wallets', 1, fn ($wallet) => $wallet
                    ->where('symbol', 'USD')
                    ->where('balance', '1500.00000000')
                    ->etc()
                )
            );
    }

    public function test_admin_can_reject_deposit(): void
    {
        $admin = User::factory()->create(['account_tier' => 'admin']);
        $deposit = Deposit::factory()->create([
            'user_id' => $this->user->id,
            'status' => 'pending',
        ]);

        $this->actingAs($admin)
            ->post(route('admin.deposits.reject', $deposit->id), [
                'reason' => 'Invalid proof document',
            ])->assertSessionHas('success');

        $this->assertEquals('rejected', $deposit->fresh()->status);
    }
}
