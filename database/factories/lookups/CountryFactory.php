<?php

namespace Database\Factories\Lookups;

use App\Models\Opportunity;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comment' => $this->faker->text(255),
            'created_by' => Opportunity::all()->random()->id
        ];
    }
}
