<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StatementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            DB::table('problem_statements')->insert([
                'Problem_Category' => 'Education & Empowerment(NEP - 2020)',
                'Problem_Tracks' => Str::random(6),
                'Problem_Title' => Str::random(5),

                'Problem_Description' => Str::random(),
            ]);
        }
    }
}
