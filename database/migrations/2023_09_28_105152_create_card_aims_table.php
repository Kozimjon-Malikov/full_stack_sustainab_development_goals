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
        Schema::create('card_aims', function (Blueprint $table) {
            $table->id();
            $table->string('name_uz');
            $table->string('name_ru');
            $table->string('name_en');
            $table->string('title_uz');
            $table->string('title_ru');
            $table->string('title_en');
            $table->string('rasm_uz');
            $table->string('rasm_ru');
            $table->string('rasm_en');
            $table->string('rasmbg_uz');
            $table->string('rasmbg_ru');
            $table->string('rasmbg_en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_aims');
    }
};
