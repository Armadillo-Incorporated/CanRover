<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photables', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('photo_id')->unsigned();
            $table->foreign('photo_id')->references('id')->on('photos')->onDelete('cascade');
            $table->morphs('photable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('photables');
    }
}
