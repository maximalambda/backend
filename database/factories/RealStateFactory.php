<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RealStateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $realStateTypes = ['house', 'department', 'land', 'comercial_groud'];
        $choose = $realStateTypes[array_rand($realStateTypes)];
        return [
            'name' => $this->faker->name,
            'real_state_type' => $choose,
            'street' => $this->faker->name,
            'external_number' => rand(5, 15),
            'internal_number' => $choose === 'department'  || $choose === 'commercial_ground'   ? rand(5, 15) : null,
            'neighborhood' => $this->faker->text($maxNbChars = 20),
            'city' => $this->faker->city,
            'country' => 'MX', //$this->faker->country,
            'rooms' => rand(1, 3),
            'bathrooms' =>rand(1, 3),
            'comments' => $this->faker->text($maxNbChars = 120),
        ];
    }
}
