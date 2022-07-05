<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'station ' . $this->faker->unique()->name,
            'station_id' => $this->faker->randomDigitNotNull,
            'next_station_id' => $this->faker->randomDigitNotNull,
            'lines_id' => $this->faker->numberBetween(13, 14, 19)



        ];
    }
}
