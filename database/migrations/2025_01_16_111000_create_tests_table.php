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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('category')->nullable();
            $table->decimal('original_price', 10, 2)->nullable();
            $table->decimal('current_price', 10, 2)->nullable();
            $table->integer('discount_percentage')->nullable();
            $table->string('image_url')->nullable();
            $table->string('product_id')->nullable();
            $table->string('sku')->nullable();
            $table->text('url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
