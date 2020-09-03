<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'department_name' => 'IT',
        ]);

        Department::create([
            'department_name' => 'Marketing',
        ]);

        Department::create([
            'department_name' => 'Operations',
        ]);

        Department::create([
            'department_name' => 'Admin',
        ]);

        Department::create([
            'department_name' => 'Customer Service',
        ]);

    }
}
