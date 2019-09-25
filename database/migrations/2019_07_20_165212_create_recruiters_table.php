<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruiters', function (Blueprint $table) {

            $table->bigIncrements('recruiter_id');
            $table->string('companyName')->unique();
            $table->string('website')->unique();
            $table->string('companyLogo');
            $table->string('email')->unique();
            $table->string('name');
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->integer('countryId');
            $table->integer('cityID');
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
        Schema::dropIfExists('recruiters');
    }
}
