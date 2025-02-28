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
    Schema::create('movies', function (Blueprint $table){
        $table->increments('id');
        $table->string('title');
        $table->string('slug',100);
        $table->integer('category_id')->unsigned();
        $table->string('time');
        $table->string('image');
        $table->string('typefile');
        $table->string('description');
        $table->foreign('category_id')->references('id')->on('categorys');
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
