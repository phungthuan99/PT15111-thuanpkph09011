<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'name' => $this->faker->name,
            'phone' => $this->faker->numberBetween(0100000000, 9999999999),
            'age' => $this->faker->numberBetween(1, 10),
            'gender' => $this->faker->numberBetween(0, 2),
            'address' => $this->faker->address,
            'is_active' => $this->faker->numberBetween(0, 1),
        ];
    }
}
