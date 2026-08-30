<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@wexmarket.com',
            'password' => bcrypt('admin123'),
            'account_tier' => 'admin',
            'kyc_level' => 'verified',
            'email_verified_at' => now(),
        ]);
    }
}
