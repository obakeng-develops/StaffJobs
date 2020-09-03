<?php

use Illuminate\Database\Seeder;
use App\Jobs;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jobs::create([
            'job_name' => 'Software Engineer',
            'description' => '<ul><li>Unit Testing</li><br><li>Liaise across teams</li></ul>',
            'location' => 'Sandton, Johannesburg',
            'closes_on' => '2020-12-18',
            'is_closed' => 0,
            'user_id' => 1,
            'department_id' => '2',
        ]);

        Jobs::create([
            'job_name' => 'Website Copywriting',
            'description' => '<ul><li>Write different things about the company/li></ul>',
            'location' => 'Craighall, Johannesburg',
            'closes_on' => '2020-12-18',
            'is_closed' => 0,
            'user_id' => 2,
            'department_id' => '1',
        ]);

        Jobs::create([
            'job_name' => 'Junior Operations Coordinator',
            'description' => '<ul><li>Make sure logistics are in order.</li><br><li>Liaise across teams</li></ul>',
            'location' => 'Fourways, Johannesburg',
            'closes_on' => '2020-12-18',
            'is_closed' => 0,
            'user_id' => 1,
            'department_id' => '2',
        ]);
    }
}
