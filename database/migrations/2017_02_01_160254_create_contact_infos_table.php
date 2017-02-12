<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('voter_id')->unsigned();
            $table->string('email');
            $table->string('homePhone');
            $table->string('cellPhone');
            $table->string('workPhone');
            $table->string('whatsappNumber');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
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
        Schema::dropIfExists('contact_info');
    }
}
