<?php

namespace Database\Seeders;

use App\Models\CompanySetting;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\Models\Payroll;
use App\Models\PayrollDetail;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // Create Admin
        $admin = User::factory()->create([
            'name' => 'Admin Ganteng',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'is_admin' => true,
        ]);

        // Create Normal User
        $user = User::factory()->create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => Hash::make('12345678'),
            'is_admin' => false,
        ]);

        // Company Settings
        CompanySetting::factory()->create([
            'name' => 'PT Mulia Jaya',
            'description' => 'Berjaya sejak 1945',
            'address' => 'Ngawi, Jawa Timur',
            'phone' => '+62 0818 5858 0336',
        ]);

        // Departments
        $departments = [
            ['name' => 'HRD', 'description' => 'Human Resource Department'],
            ['name' => 'IT', 'description' => 'Information Technology'],
            ['name' => 'Finance', 'description' => 'Financial Division'],
        ];

        foreach ($departments as $deptData) {
            $department = Department::create($deptData);

            // For each department, create positions
            for ($i = 1; $i <= 2; $i++) {
                $position = Position::create([
                    'name' => $faker->jobTitle,
                    'description' => 'Position in ' . $department->name,
                    'department_id' => $department->id,
                    'shift_clock_in_time' => '08:00:00',
                    'shift_duration' => 8,
                ]);

                // For each position, create employees
                for ($j = 1; $j <= 3; $j++) {
                    Employee::create([
                        'fullname' => $faker->name,
                        'phone_number' => $faker->phoneNumber,
                        'hire_date' => $faker->dateTimeBetween('-3 years', 'now'),
                        'address' => $faker->address,
                        'bank_name' => $faker->randomElement(['BCA', 'Mandiri', 'BRI']),
                        'bank_number' => $faker->bankAccountNumber,
                        'npwp' => $faker->numerify('##.###.###.#-###.###'),
                        'position_id' => $position->id,
                        'card_id' => strtoupper($faker->bothify('CARD###??')),
                    ]);
                }
            }
        }
    }
}