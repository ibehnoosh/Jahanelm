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
        Schema::create('students', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name');
            $table->string('family');
            $table->string('meli', 10)->nullable()->unique();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('gender', 1);
            $table->string('city')->nullable();
            $table->string('father_mobile', 10)->nullable();
            $table->string('mother_mobile', 10)->nullable();
            $table->string('tel', 15)->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile', 10);
            $table->string('picture')->nullable();
            $table->string('meli_picture')->nullable();
            $table->integer('rest_money')->default(0);
            $table->string('rest_money_reason')->nullable();
            $table->dateTime('last_login')->nullable();
            $table->integer('count_login')->default(0);
            $table->string('birth', 4)->nullable();
            $table->string('password')->invisible();

            $table->unsignedBigInteger('center_id');
            $table->foreign('center_id')->references('id')->on('centers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
