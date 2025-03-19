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
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->string('profile_pic')->nullable();
            $table->string('fullname')->nullable();
            $table->string('gender')->nullable();
            $table->string('birthday')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('ethnic')->nullable();
            $table->string('religious')->nullable();
            $table->string('nationality')->nullable();
            $table->longText('residence_place')->nullable();
            $table->longText('current_place')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('id_card_number')->nullable();
            $table->string('id_card_date')->nullable();
            $table->string('id_card_place')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
