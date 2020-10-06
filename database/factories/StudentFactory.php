<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'age' => $this->faker->numberBetween(16, 30),
            'gender' => $this->faker->numberBetween(0, 2),
            'address' => $this->faker->address,
            'is_active' => $this->faker->numberBetween(0, 1),
        ];
    }
}
