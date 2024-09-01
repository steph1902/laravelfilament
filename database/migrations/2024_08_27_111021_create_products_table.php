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
            $table->string('name');
            $table->decimal('price_khr', 15, 2)->nullable();
            $table->decimal('price_vnd', 15, 2)->nullable();
            $table->decimal('price_thb', 15, 2)->nullable();
            $table->string('product_image')->nullable();
            $table->string('category');
            $table->boolean('status')->default(true);
            $table->boolean('hot_items_flag')->default(false);
            $table->boolean('new_collections_flag')->default(false);
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
