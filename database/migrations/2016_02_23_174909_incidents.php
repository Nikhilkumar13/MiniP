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
            $table->string('type',10);
            $table->string('uid',10);
            $table->string('gender',7);
            $table->string('comment',250);
            $table->string('url',100);
            $table->integer('age');
            $table->double('lat',18,15);
            $table->double('lng',18,15);
            $table->timestamp('created_at');
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
