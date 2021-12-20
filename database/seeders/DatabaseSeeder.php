<?php

namespace Database\Seeders;

use CommentSeeder;
use Database\Question\QuestionSeeder;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            // OpportunitiesSeeder::class,
             CategorySeeder::class,
            CountrySeeder::class,
//             UserSeeder::class,
           
            OpportunitySeeder::class,
            // FavouriteSeeder::class,
            // QuestionSeeder::class,
            // CommentSeeder::class,
        ]);
        // $this->call(CategorySeeder::class);
        // $this->call(CountrySeeder::class);
        // $this->call(OpportunitySeeder::class);
    }
}
