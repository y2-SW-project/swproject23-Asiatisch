<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cheese>
 */
class CheeseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'name' =>$this ->faker->text(10),
           'type' =>$this ->faker->text(10),
           'description' =>$this->faker->text(255),
           'country_origin' =>$this->faker->text(20),
           'customer_id' => 1
        ];
    }
}
