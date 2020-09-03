<?php

use Illuminate\Database\Seeder;
use App\Applicants;

class ApplicantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Applicants::create([
            'firstname' => 'Obakeng',
            'lastname' => 'Mosadi',
            'email' => 'mosadiobakeng7@gmail.com',
            'phone' => '0742878617',
            'cv' => 'somewhere',
            'coverletter' => 'pathtosomewhere',
            'linkedin_profile' => 'http://linkedin.com/profile/Obakeng',
            'how_did_you_hear_about_us' => 'LinkedIn',
            'department_id' => 1,
        ]);

        Applicants::create([
            'firstname' => 'Kamogelo',
            'lastname' => 'Duiker',
            'email' => 'duiker.kamo@gmail.com',
            'phone' => '0792983761',
            'cv' => 'somewhere',
            'coverletter' => 'pathtosomewhere',
            'linkedin_profile' => 'http://linkedin.com/profile/Obakeng',
            'how_did_you_hear_about_us' => 'Google Search',
            'department_id' => 2,
        ]);

        Applicants::create([
            'firstname' => 'Vuyo',
            'lastname' => 'Mzangwa',
            'email' => 'vmzangwa@gmail.com',
            'phone' => '0172625425',
            'cv' => 'somewhere',
            'coverletter' => 'pathtosomewhere',
            'linkedin_profile' => 'http://linkedin.com/profile/Obakeng',
            'how_did_you_hear_about_us' => 'Word of Mouth',
            'department_id' => 3,
        ]);
    }
}
