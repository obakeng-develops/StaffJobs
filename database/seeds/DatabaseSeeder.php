<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(JobsSeeder::class);
        $this->call(ApplicantsSeeder::class);
        $this->call(UserRolesSeed::class);
        $this->call(RoleSeed::class);
        $this->call(DepartmentSeed::class);
    }
}
