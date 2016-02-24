<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Incidents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('incidents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->double('lat',18,15);
            $table->double('lng',18,15);
            $table->double('radius',7,3);
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('incidents');
        //
    }
}
