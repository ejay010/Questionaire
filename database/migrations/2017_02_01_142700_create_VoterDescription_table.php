<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoterDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('voters', function (Blueprint $table){
            $table->increments('id');
            $table->integer('location_id')->unsigned();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('gender');
            $table->date('dob');
            $table->string('maritalStatus');
            //$table->string('children');
            //$table->string('education');
            $table->timestamps();

            $table->foreign('location_id')->references('id')->on('location')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('voters');
    }
}
