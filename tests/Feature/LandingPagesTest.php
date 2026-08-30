<?php

namespace Tests\Feature;

use Tests\TestCase;

class LandingPagesTest extends TestCase
{
    public function test_public_landing_pages_can_be_rendered(): void
    {
        $pages = [
            '/',
            '/about',
            '/faqs',
            '/copy',
            '/crypto',
            '/forex',
            '/stocks',
            '/privacy-policy',
            '/rules',
        ];

        foreach ($pages as $page) {
            $this->get($page)->assertOk();
        }
    }

    public function test_landing_page_mentions_wexmarket(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('WexMarket', false);
    }
}
