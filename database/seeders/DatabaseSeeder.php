<?php

namespace Database\Seeders;

use App\Models\CompanySetting;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\PseudoTypes\False_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin Ganteng',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678'),
            'is_admin' => True,
        ]);

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('12345678'), 
            'is_admin' => False,
        ]);

        CompanySetting::factory()->create([
            'name' => 'PT Mulia Jaya',
            'description' => 'Berjaya sejak 1945',
            'address' => 'Ngawi, Jawa Timur',
            'phone' => '+62 0818 5858 0336',
        ]);
    }
}
