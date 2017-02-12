<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('location', function (Blueprint $table){
            $table->increments('id');
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->string('island');
            $table->string('pollingDivision');
            //$table->string('aptNumber');
            $table->string('primaryColor');
            $table->string('secondaryColor');
            $table->longText('otherDetails');
            $table->integer('persons');
            $table->integer('voters');
            $table->string('classification');
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
        //
        Schema::dropIfExists('location');
    }
}
