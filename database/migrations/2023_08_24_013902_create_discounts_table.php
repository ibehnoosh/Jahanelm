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
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->string('title',191);
            $table->enum('type', ['master','person' , 'student', 'no']);
            $table->integer('discount');
            $table->boolean('is_active');
            $table->boolean('is_letter');
            $table->integer('number_terms');
            $table->integer('number_family');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
