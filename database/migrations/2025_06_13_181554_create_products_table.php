<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');          // Product name
        $table->text('description');     // Product description
        $table->decimal('price', 8, 2);  // Price with 8 total digits (2 decimal places)
        $table->timestamps();            // Created_at and updated_at columns
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
