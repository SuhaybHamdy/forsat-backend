<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OpportunityDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'opportunity_id' => $this->faker->randomElement(Opportunity::all(['id'])),
            'benefits' => $this->faker->text(600),
            'applicaition_process' => $this->faker->text(400),
            'father_qureies' => $this->faker->text(400),
            'eligibities' => $this->faker->text(500),
            'start_date' => $this->faker->dateTime(),
            // 'end_date' => $this->faker->dateTime(),
            'official_link' => $this->faker->url
        ];
    }
}
