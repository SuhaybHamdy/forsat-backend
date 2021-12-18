<?php

namespace Database\Seeders;

use App\Models\Opportunity;
use App\Models\OpportunityDetail;
use Illuminate\Database\Seeder;

class OpportunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $opportunity_detail= OpportunityDetail::factory()->create();
        Opportunity::factory(10)->create()->each(function($opportunity){
            OpportunityDetail::factory()->create([
                'opportunity_id'=>$opportunity->id
            ]);
        });

        // Opportunity::factory(3)->create()
        // ->each(function ($opportunity){
        //     $opportunity->detail()->create([
        //          'opportunity_id' => $opportunity->id,
        //     'benefits' => $this->faker->text(600),
        //     'application_process' => $this->faker->text(400),
        //     'further_queries' => $this->faker->text(400),
        //     'eligibilities' => $this->faker->text(500),
        //     'start_date' => $this->faker->dateTime(),
        //     'end_date' => $this->faker->dateTime(),
        //     'official_link' => $this->faker->url]);
        // });
    //     factory(Opportunity::class, 300)->create()->each(function ($opportunity){
    //         $opportunity->detail()->save(factory(OpportunityDetail::class)->make());
    //    });
    }
}
