<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TennisMatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tennis_matches')->insert([
            'id'=> 1,
            'location' => 'Paris, France',
            'playerOne' => 1,
            'playerTwo' => 2,
            'result' => '6:2 6:3'
        ]);

        DB::table('tennis_matches')->insert([
            'id'=> 2,
            'location' => 'Paris, France',
            'playerOne' => 1,
            'playerTwo' => 3,
            'result' => '6:4 4:6 6:3'
        ]);

        DB::table('tennis_matches')->insert([
            'id'=> 3,
            'location' => 'London, UK',
            'playerOne' => 1,
            'playerTwo' => 4,
            'result' => '6:0 4:6 7:6'
        ]);
    }
}
