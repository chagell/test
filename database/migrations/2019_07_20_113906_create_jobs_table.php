<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * recuriter id
         * job coordinates
         * coutry id
         * city id
         * fucntion id
         * */
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('job_id');
            $table->unsignedBigInteger('recruiter_id');
            $table->foreign('recruiter_id')->references('recruiter_id')->on('recruiters');
            $table->string('job_title');
            $table->longText('job_description');
            $table->dateTimeTz('job_startDate');
            $table->dateTimeTz('job_expiryDate');
            $table->integer('country_id');
            $table->integer('city_id');
            $table->integer('function_id');
            $table->integer('coordinates_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
