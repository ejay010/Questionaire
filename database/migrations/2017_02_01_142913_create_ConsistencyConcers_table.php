<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsistencyConcersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('constitConcerns', function (Blueprint $table){
            $table->increments('id');
            $table->integer('location_id')->unsigned();
            $table->longText('constituencyConcerns');
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
        Schema::dropIfExists('constitConcerns');
    }
}
