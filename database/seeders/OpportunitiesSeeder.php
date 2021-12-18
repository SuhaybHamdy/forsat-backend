<?php

namespace Database\Seeders;
use App\Models\Opportunity;
use App\Models\OpportunityDetail;
use Illuminate\Database\Seeder;

class OpportunitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Opportunity::factory(140)->create()->each(function($opportunity){
            OpportunityDetail::factory()->create([
                'opportunity_id'=>$opportunity->id
            ]);
        });
    }
}
