<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            'id'=> 1,
            'name' => 'Novak Djokovic',
            'nationality' => 'Serbia',
            'atp_points'=> 11113,
            'rank' => 1
        ]);

        DB::table('players')->insert([
            'id'=> 2,
            'name' => 'Daniil Medvedev',
            'nationality' => 'Russia',
            'rank' => 2
        ]);

        DB::table('players')->insert([
            'id'=> 3,
            'name' => 'Stefanos Tsitsipas',
            'nationality' => 'Greece',
            'rank' => 3
        ]);

        DB::table('players')->insert([
            'id'=> 4,
            'name' => 'Alexander Zverev',
            'nationality' => 'Germany',
            'rank' => 4
        ]);

        DB::table('players')->insert([
            'id'=> 5,
            'name' => 'Rafael Nadal',
            'nationality' => 'Spain',
            'rank' => 5
        ]);
    }
}
