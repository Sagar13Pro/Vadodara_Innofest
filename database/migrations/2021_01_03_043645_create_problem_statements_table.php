<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProblemStatementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problem_statements', function (Blueprint $table) {
            $table->id();
            $table->longText('Problem_Category');
            $table->longText('Problem_Tracks');
            $table->longText('Problem_Title');
            $table->longText('problem_Description');
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
        Schema::dropIfExists('problem_statements');
    }
}
