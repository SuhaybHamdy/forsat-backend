<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lookups\Category;
use App\Models\Lookups\Country;
use App\Models\User;

class OpportunityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
               // 'name' => $this->faker->name(),
            // 'name' => $this->faker->sentence(15, true),
            'title' => $this->faker->sentence(15, true),
            'description' => $this->faker->text(15),
            'category_id' => Category::all()->random()->id,
            'country_id' => Country::all()->random()->id,
            'deadline' => $this->faker->dateTime(),
            'organizer' => $this->faker->company(),
            'created_by' => User::all()->random()->id,
     
        ];
    }
}
