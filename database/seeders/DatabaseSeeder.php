<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Company::factory()->create([
            'name' => 'ATO',
        ]);

        \App\Models\Company::factory()->create([
            'name' => 'iSP',
        ]);

        \App\Models\Company::factory()->create([
            'name' => 'Constructora',
        ]);

        \App\Models\EmployeeCategory::factory()->create([
            'name' => 'Ventas',
       ]);

       \App\Models\EmployeeCategory::factory()->create([
        'name' => 'Desarrollador',
         ]);

       \App\Models\EmployeeCategory::factory()->create([
        'name' => 'Técnico',
        ]); 

        \App\Models\BloodType::factory()->create([
            'name' => 'A+',
        ]);

        \App\Models\BloodType::factory()->create([
            'name' => 'A-',
        ]);
        \App\Models\BloodType::factory()->create([
            'name' => 'B+',
        ]);

        \App\Models\BloodType::factory()->create([
            'name' => 'B-',
        ]);

        \App\Models\BloodType::factory()->create([
            'name' => 'AB+',
        ]);

        \App\Models\BloodType::factory()->create([
            'name' => 'AB-',
        ]);

        \App\Models\BloodType::factory()->create([
            'name' => 'O+',
        ]);

        \App\Models\BloodType::factory()->create([
            'name' => 'O-',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Melo Perez Prado',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'company_id' => '2',
            'employee_number' => '125',
            'employee_category_id' => '2',
            'blood_type_id' => '7',
            'allergies' => 'Ninguna',
            'curp' => 'CURP1236584HTHSAL',
            'rfc' => 'RFCV145685H53',
            'phone_number' => '9934185247',
            'emergency_contact_name' => 'Melo Prado Perez',
            'emergency_contact_phone' => '9934251463',
            'signature' => 'qwerty',

        ]);

        //\App\Models\User::factory(10)->create();
    }
    
}
