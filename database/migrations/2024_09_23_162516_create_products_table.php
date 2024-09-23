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
            $table->string('title');
            $table->integer('price');
            $table->integer('stock');
            $table->text('decription');
            $table->string('img');
            $table->unsignedBigInteger('merchant_id');
            $table->unsignedBigInteger('trade_mark_id');
            $table->foreign('merchant_id')->references('id')->on('users');
            $table->foreign('trade_mark_id')->references('id')->on('trade_mark');
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
