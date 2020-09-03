<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'role_name' => 'Admin',
        ]);

        Role::create([
            'role_name' => 'Contributor',
        ]);
    }
}
