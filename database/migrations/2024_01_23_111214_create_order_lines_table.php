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
        Schema::create('order_lines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('products')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('product_price_id')->constrained('product_prices')->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('quantity')->default(0);
            $table->decimal('price', 13, 2)->default(0.00);
            $table->decimal('discount', 13, 2)->default(0.00);
            $table->decimal('discount_amount', 13, 2)->default(0.00);
            $table->decimal('mark_up', 13, 2)->default(0.00);
            $table->decimal('totals', 13, 2)->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_lines');
    }
};
