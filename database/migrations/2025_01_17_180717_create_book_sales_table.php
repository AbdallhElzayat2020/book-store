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
        Schema::create('book_sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->decimal('price', 8, 2);
            $table->string('payment_id');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_sales');
    }
};
