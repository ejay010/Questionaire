<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLastElectonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('last_election', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('voter_id')->unsigned();
            $table->string('status');
            $table->string('supported');
            $table->timestamps();

            $table->foreign('voter_id')->references('id')->on('voters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('last_electon');
    }
}
