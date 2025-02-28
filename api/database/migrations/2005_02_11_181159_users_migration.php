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
    Schema::create('users', function (Blueprint $table){
        $table->increments('id');
        $table->string('username');
        $table->string('password');
        $table->string('email');
        $table->integer('plan_id')->unsigned();
        $table->string('end_Plan');
        $table->foreign('plan_id')->references('id')->on('plans');
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
