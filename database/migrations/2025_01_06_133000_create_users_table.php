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
            $table->id('user_id');
            $table->string('user_first_name', 100);
            $table->string('user_last_name', 100);
            $table->string('user_email', 100)->unique();
            $table->string('user_password', 255);
            $table->string('user_phone_number', 15)->nullable();
            $table->boolean('user_verified')->default(0);
            $table->boolean('user_status')->default(0);
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade');
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
