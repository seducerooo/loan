<?php

namespace Database\Factories;

use App\Models\Month;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Month>
 */
class MonthFactory extends Factory
{
    protected static $number = 4;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $number = static::$number;

        // Increment the counter if the current number is less than 13
        if ($number < 13) {
            static::$number++;
        }

        return [
            'number_of_months' => $number,
            'name' => $number . ' ماه'
            // Define other attributes here
        ];
    }
}
