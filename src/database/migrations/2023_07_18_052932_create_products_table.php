<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('sku')->nullable();
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('discount_id')->nullable();
            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('discount_id')->references('id')->on('discounts');
            $table->decimal('price');
            $table->unsignedInteger('stock');
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
