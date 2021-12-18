<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(20)->create();
        // ->each(function($user){
        //     Question::factory()
        // });
        User::factory(4)->create()->each(function($user){
            Question::factory()->create([
                'created_by'=>$user->id

            ])->each(function($qestions){
                Comment::factory(rand(1,4))->create([
                    'question_id'=>$qestions->id


                ]);
            });
        });
    }
}
