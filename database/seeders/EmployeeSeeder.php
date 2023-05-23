<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'address' => 'Pasig City'
            ],
            [
                'first_name' => 'Jona',
                'last_name' => 'Does',
                'address' => 'Pasig City'
            ]
        ];

        foreach($employees as $employee)
        {
            Employee::create($employee);
        }
    }
}
