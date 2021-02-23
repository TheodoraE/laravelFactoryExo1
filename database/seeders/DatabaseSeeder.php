<?php

namespace Database\Seeders;

use App\Models\Student;
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
        $this->call([
            BatimentSeeder::class,
            FormationSeeder::class,
            TypeFormationSeeder::class
        ]);
        Student::factory()->count(50)->create();
    }
}
