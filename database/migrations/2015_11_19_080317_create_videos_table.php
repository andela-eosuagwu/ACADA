<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('categories');
            $table->text('title');
            $table->text('description');
            $table->string('src');
            $table->integer('favourite')->default(0);
            $table->integer('views')->default(0);
            $table->timestamps();
            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')
            ->references('id')
            ->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('videos');
    }
}
