<?php

namespace Database\Seeders;

use App\Models\CompanySetting as ModelsCompanySetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySetting extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ModelsCompanySetting::factory()->create([
            'name' => 'PT Mulia Jaya',
            'description' => 'Berdiri Sejak 1945',
            'address' => 'Ngawi ',
            'phone' => '+62 23028398289392',
        ]);
    }
}
