<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
           $table->increments('id');
           $table->string('title');
           $table->string('image');
           $table->string('summary');
           $table->text('description');
           $table->integer('author_id')->unsigned();
           $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade')->onUpdate('cascade');
           $table->integer('state_id')->unsigned();
           $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade')->onUpdate('cascade');
           $table->integer('user_id')->unsigned();
           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('articles');
    }
}
