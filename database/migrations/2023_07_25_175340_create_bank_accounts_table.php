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
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('account_number');
            $table->string('card_number');
            $table->boolean('is_active');
            $table->unsignedBigInteger('bank_id');
            $table->unsignedBigInteger('center_id');
            $table->foreign('bank_id')->references('id')->on('banks')->cascadeOnDelete();
            $table->foreign('center_id')->references('id')->on('centers')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_accounts');
    }
};
