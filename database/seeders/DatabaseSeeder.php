<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'firstName' => 'sagar',
            'lastName' => 'patel',
            'email' => 'sagarpatel@mail.com',
            'mobileNo' => rand(10, 10),
            'password' => Hash::make('Test@123'),
        ]);

        DB::table('proposals')->insert([
            'teamID' => 'TEAM_1',
            'teamName' => 'Hacks',
            'teamLeaderName' => 'Sagar',
            'teamLeaderEmail' => 'sagarpatel@mail.com',
            'teamLeaderMobile' => 1231231234,
            'mentorName' => 'mentor1',
            'mentorEmail' => 'mentore@mail.com',
            'mentorMobile' => 9879876543,
            'institute' => 'piet',
            'teamMembers' => 'shyam/yash/akash',
            'problemID' => '4',
            'problemTitle' => 'title',
            'problemCategory' => 'category',
            'problemDescription' => 'desciption',
            'solutionBrief' => 'solution......',
            'methodology' => 'laravel',
            'timeline' => '4/month',
            'image1Name' => 'NULL',
            'image2Name' => 'NULL',
        ]);
    }
}
