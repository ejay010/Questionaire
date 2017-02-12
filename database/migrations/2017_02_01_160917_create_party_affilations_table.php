<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartyAffilationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('party_affiliations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('voter_id')->unsigned();
            $table->string('partyAffiliation');
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
        Schema::dropIfExists('party_affiliations');
    }
}
