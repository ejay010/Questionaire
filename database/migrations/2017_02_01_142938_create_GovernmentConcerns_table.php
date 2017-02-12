<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGovernmentConcernsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('govConcerns', function (Blueprint $table){
            $table->increments('id');
            $table->integer('location_id')->unsigned();
            $table->longText('governmentConcerns');
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
        Schema::dropIfExists('govConcerns');
    }
}
