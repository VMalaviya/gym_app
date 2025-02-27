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
        Schema::create('packages', function (Blueprint $table) {
            $table->id(); // Equivalent to INT AUTO_INCREMENT PRIMARY KEY
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->integer('duration_months');
            $table->decimal('price', 10, 2);
            $table->timestamps(); // Includes created_at and updated_at with proper defaults
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
