<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddstautTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addstaut', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('FBS');
            $table->integer('BPmin');
            $table->integer('BPmix');
            $table->string('comment');
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
        Schema::drop('addstaut');
    }
}
