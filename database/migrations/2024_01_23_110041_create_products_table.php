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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->text('description')->nullable();
            $table->text('hash')->nullable();
            $table->string('brand')->nullable();
            $table->string('supplier')->nullable();
            $table->string('supplier_address')->nullable();
            $table->string('supplier_contact')->nullable();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnUpdate()->cascadeOnDelete();    
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
