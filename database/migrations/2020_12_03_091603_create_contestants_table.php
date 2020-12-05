<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contestants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contestant_no')->unique();
            $table->string('first_name', 255);
            $table->string('middle_name', 255);
            $table->string('last_name', 255);
            $table->string('gender', 6);
            $table->integer('age');
            $table->string('attainment', 20);
            $table->string('school', 255);
            $table->string('course', 255)->nullable();
            $table->integer('year')->nullable();
            $table->integer('weight');
            $table->integer('height');
            $table->binary('photo');
            $table->integer('bust_line');
            $table->integer('waist_line');
            $table->integer('hip_line');
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
        Schema::dropIfExists('contestants');
    }
}
