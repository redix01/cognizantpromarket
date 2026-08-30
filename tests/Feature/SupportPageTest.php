<?php

namespace Tests\Feature;

use App\Models\PlatformSetting;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SupportPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_support_page_shows_admin_configured_support_details(): void
    {
        PlatformSetting::create([
            'key' => 'support_email',
            'value' => 'help@waxxmarket.com',
            'group' => 'General',
            'type' => 'email',
        ]);

        PlatformSetting::create([
            'key' => 'support_phone',
            'value' => '+1 555 0100',
            'group' => 'General',
            'type' => 'text',
        ]);

        PlatformSetting::create([
            'key' => 'livechat_widget_code',
            'value' => '<script>console.log("chat")</script>',
            'group' => 'Integrations',
            'type' => 'textarea',
        ]);

        $user = User::factory()->create();

        $this->actingAs($user)
            ->get(route('support'))
            ->assertOk()
            ->assertInertia(fn ($page) => $page
                ->component('Support')
                ->where('support.email', 'help@waxxmarket.com')
                ->where('support.phone', '+1 555 0100')
                ->where('support.livechat_widget_code', '<script>console.log("chat")</script>')
            );
    }
}
