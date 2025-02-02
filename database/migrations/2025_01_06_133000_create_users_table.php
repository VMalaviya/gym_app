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
            $table->string('user_first_name', 100);
            $table->string('user_last_name', 100);
            $table->string('email', 100)->unique();
            $table->string('user_gender', 10)->nullable();
            $table->text('user_photo')->nullable();
            $table->string('user_expert_in', 255)->nullable();
            $table->string('password', 255);
            $table->string('user_phone_number', 15)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('email_verification_sent_at')->nullable();
            $table->string('role',100)->default('User');
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
