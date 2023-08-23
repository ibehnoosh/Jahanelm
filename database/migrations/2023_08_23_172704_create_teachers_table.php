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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('family');
            $table->string('father')->nullable();
            $table->string('tel', 15)->nullable();
            $table->string('address')->nullable();
            $table->string('mobile', 10);
            $table->dateTime('last_login')->nullable();
            $table->integer('count_login')->default(0);
            $table->string('password')->invisible()->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
