<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employer', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('voter_id')->unsigned();
            $table->string('employerName');
            $table->string('unionName');
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
        Schema::dropIfExists('employer');
    }
}
