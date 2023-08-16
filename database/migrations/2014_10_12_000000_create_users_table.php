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
            $table->string('last_name');
            $table->string('first_name');
            $table->string('suffix')->nullable();
            $table->string('honorific')->nullable();
            $table->string('id_number')->unique();
            $table->string('type');
            $table->string('sex');
            $table->date('birthday');
            $table->string('municipality');
            $table->string('barangay');
            $table->string('email')->unique();
            $table->string('license')->nullable()->unique();
            $table->string('password');
            $table->string('profile')->nullable();
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
