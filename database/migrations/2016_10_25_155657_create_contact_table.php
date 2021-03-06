<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('contact', function (Blueprint $table) {
            $table->engine ="InnoDB";
            $table->increments('id');
            $table->string('email');
            $table->bigInteger('phone');
            $table->text('address');
            $table->timestamps();
            $table->integer('pets_id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contact');
    }
}
