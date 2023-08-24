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
        Schema::create('terms', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->integer('year');
            $table->enum('season' , ['بهار' , 'تابستان' , 'پاییز' ,'زمستان']);
            $table->integer('term_states_id');
            $table->integer('center_id');
            $table->date('check_level');
            $table->date('register_start');
            $table->date('register_end');
            $table->date('class_start');
            $table->date('class_end');
            $table->date('online_register_start');
            $table->date('online_register_end');
            $table->date('operation_start');
            $table->date('operation_end');
            $table->date('discount_start');
            $table->date('discount_end');
            $table->date('discount_relate_start');
            $table->date('discount_relate_end');
            $table->date('discount_id');
            $table->boolean('is_grade');
            $table->boolean('is_lab');
            $table->boolean('is_interview');
            $table->boolean('is_material_cover');
            $table->timestamps();
            $table->foreign('term_states_id')->references('id')->on('term_states')->cascadeOnDelete();
            $table->foreign('center_id')->references('id')->on('centers')->cascadeOnDelete();
            $table->foreign('discount_id')->references('id')->on('discounts')->cascadeOnDelete();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('terms');
    }
};

