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
        Schema::create('sub_orders', function (Blueprint $table) {
            $table->id(); // Equivalent to INT AUTO_INCREMENT PRIMARY KEY
            $table->unsignedBigInteger('order_id'); // INT NOT NULL
            $table->unsignedBigInteger('package_id'); // INT NOT NULL
            $table->integer('quantity')->default(1); // Quantity with default 1
            $table->decimal('subtotal', 10, 2);
            $table->date('start_date'); // DATE NOT NULL
            $table->date('end_date');   // DATE NOT NULL
            $table->timestamps(); // Includes created_at and updated_at

            // Foreign key constraints
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_orders');
    }
};
