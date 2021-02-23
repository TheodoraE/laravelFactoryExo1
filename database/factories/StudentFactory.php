<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "lastame" => $this->faker->lastname,
            "firstname" => $this->faker->firstname,
            "age" => $this->faker->numberBetween(18, 30),
            "state" => $this->faker->boolean,
        ];
    }
}
