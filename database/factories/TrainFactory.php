<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company' => fake() ->company,
            'departure_station' => fake() ->city,
            'arrival_station' => fake() ->city,
            'departure_time' => fake() ->time(),
            'arrival_time' => fake() ->time(),
            'train_code' => fake() ->unique()->randomNumber(5),
            'carriage_count' => fake() ->numberBetween(5, 15),
            'on_time' => fake() ->boolean(80), // 80% probabilità di essere in orario
            'cancelled' => fake() ->boolean(5), // 5% probabilità di essere cancellato
        ];
    }
}
