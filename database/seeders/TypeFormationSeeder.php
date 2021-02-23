<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeFormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_formations')->insert(
            [
                [
                    'name'=>"Cuisine 101",
                ],
                [
                    'name'=>"Web development 101",
                ],
                [
                    'name'=>"Marketing 101",
                ],
                [
                    'name'=>"Art 101",
                ],
                [
                    'name'=>"Math 101",
                ],
                [
                    'name'=>"Sport 101",
                ],
                [
                    'name'=>"Cuisine 202",
                ],
                [
                    'name'=>"Web development 202",
                ],
                [
                    'name'=>"Marketing 202",
                ],
                [
                    'name'=>"Art 202",
                ]
            ]
        );
    }
}
