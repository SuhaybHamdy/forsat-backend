<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpportunityDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunity_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('opportunity_id');
            $table->mediumText('benefits');
            $table->mediumText('applicaition_process');
            $table->mediumText('father_qureies')->nullable();
            $table->mediumText('eligibities');
            $table->timestamp('start_date');
            $table->string('official_link')->nullable();
            $table->json('eligible_regions')->nullable();
            // $table->timestamp('end_date');
            $table->timestamps();
    
        });
        Schema::table('opportunity_details', function (Blueprint $table) {
            $table
            ->foreign('opportunity_id')
            ->references('id')
            ->on('opportunities')
            ->onDelete('cascade');
            
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opportunity_details');
    }
}
