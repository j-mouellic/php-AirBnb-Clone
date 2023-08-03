<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => 1,
            "property_id" => rand(1, 40),
            "start_at" => Carbon::now()->addDays(rand(1, 30))->addHours(rand(1, 24))->addMinutes(rand(1, 60)),
            "end_at" => Carbon::now()->addDays(rand(1, 30))->addHours(rand(1, 24))->addMinutes(rand(1, 60)),
            "total_price" => rand(1500, 6000)
        ];
    }
}
