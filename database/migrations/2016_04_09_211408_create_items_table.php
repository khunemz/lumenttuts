<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function(Blueprint $t){
            $t->increments('id');
            $t->string('title');
            $t->string('description');
            $t->string('price');
            $t->string('slug');
            $t->string('url1');
            $t->string('url2');
            $t->string('url3');
            $t->string('url4');
            $t->timestamps();
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
    }
}
