<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\RolesAndPermissionsSeeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesAndPermissionsSeeder::class);

        // Use a securely hashed, strong initial password generated dynamically or securely injected,
        // rather than the default factory 'password'. For seeding environments:
        $adminPassword = env('ADMIN_SEED_PASSWORD', Str::password(16, true, true, false, false));

        $user = User::factory()->create([
            'name' => 'Test Super Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make($adminPassword)
        ]);

        $user->assignRole('Super Administrator');

        // Demo data separated out - do not use in prod
        if(env('APP_ENV') !== 'production') {
            User::factory(10)->create();
        }
    }
}
