<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobSeekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_seekers', function (Blueprint $table) {
            $table->bigIncrements('jobSeeker_id');
            $table->string('emailId')->unique();
            $table->string('firstName');
            $table->string('MidName');
            $table->string('lastName');
            $table->integer('mobileNumber')->unique();
            $table->date('dob');
            $table->integer('countryId');
            $table->integer('cityID');
            $table->integer('lastSalary');
            $table->integer('expectedSalary');
            $table->string('status');
            $table->string('remarks');
            $table->binary('isCvAttachedFlag');
            $table->binary('isPhotoUploadedFlag');
            $table->integer('nationalityId');
            $table->integer('martialStatusId');
            $table->integer('genderId_test');
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
        Schema::dropIfExists('job_seekers');
    }
}
