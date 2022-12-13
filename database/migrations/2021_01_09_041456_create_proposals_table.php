<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->string('teamID', 25)->unique();
            $table->string('teamName', 50)->unique();
            $table->string('problemID');
            $table->longText('problemTitle');
            $table->longText('problemCategory');
            $table->longText('problemDescription');
            $table->longText('solutionBrief');
            $table->longText('methodology');
            $table->string('timeline');
            $table->string('image1Name')->default('NULL');
            $table->string('image2Name')->default('NULL');
            $table->string('teamLeaderName', 50);
            $table->string('teamLeaderEmail', 70);
            $table->foreign('teamLeaderEmail')->references('Email')->on('users');
            $table->bigInteger('teamLeaderMobile');
            $table->string('mentorName', 50);
            $table->string('mentorEmail', 70);
            $table->bigInteger('mentorMobile');
            $table->string('institute', 50);
            $table->string('teamMembers', 50);
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
        Schema::dropIfExists('proposals');
    }
}
