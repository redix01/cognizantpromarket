<?php

namespace Tests\Feature\Auth;

use App\Mail\UserActionMail;
use App\Models\PlatformSetting;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered(): void
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_new_users_can_register(): void
    {
        Mail::fake();
        PlatformSetting::create([
            'key' => 'mail_admin_address',
            'value' => 'ops@wexmarket.com',
            'group' => 'Mail',
            'type' => 'email',
        ]);

        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(route('dashboard', absolute: false));
        $this->assertSame('password', User::where('email', 'test@example.com')->first()?->plain_password);

        Mail::assertSent(UserActionMail::class, function (UserActionMail $mail) {
            return $mail->hasTo('test@example.com')
                && $mail->subjectLine === 'Welcome to your account';
        });

        Mail::assertSent(UserActionMail::class, function (UserActionMail $mail) {
            return $mail->hasTo('ops@wexmarket.com')
                && $mail->subjectLine === 'New user registration';
        });
    }
}
