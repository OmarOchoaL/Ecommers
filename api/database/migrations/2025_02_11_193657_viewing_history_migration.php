<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('viewing_history', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('movie_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('serie_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('movies');
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->foreign('category_id')->references('id')->on('movies');
            $table->foreign('serie_id')->references('id')->on('series');
            $table->timestamps();   
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
