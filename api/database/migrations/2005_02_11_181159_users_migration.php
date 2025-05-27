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
    Schema::create('users', function (Blueprint $table) {
        $table->increments('id');
        $table->string('username')->unique();
        $table->string('email')->unique();
        $table->string('password');
        $table->unsignedInteger('plan_id')->default(4); // Plan gratuito por defecto
        $table->dateTime('end_Plan')->nullable(); // Fecha de finalización opcional
        $table->rememberToken(); // Opcional pero útil
        $table->timestamps();
        $table->foreign('plan_id')->references('id')->on('plans');
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
