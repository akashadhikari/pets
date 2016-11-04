<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsrecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petsrecord',function(Blueprint $table){
         $table->engine ="InnoDB";
            $table->increments('p_id');
            $table->string('petstype');
            $table->string('breedtype');
            $table->integer('age');
            $table->text('description');
            $table->string('imglink');
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
        Schema::drop('petsrecord');
    }
}
