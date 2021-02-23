<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert(
            [
                [
                    'name'=>"IT",
                    'description'=>"Information Technology"
                ],
                [
                    'name'=>"Marketing",
                    'description'=>"Marketing and communication"
                ],
                [
                    'name'=>"Art",
                    'description'=>"Everything about art"
                ],
                [
                    'name'=>"Math",
                    'description'=>"Mathematics"
                ],
                [
                    'name'=>"Sport",
                    'description'=>"Physical and sport education"
                ],
                [
                    'name'=>"Cuisine",
                    'description'=>"Gastronomy"
                ]
            ]
        );
    }
}
