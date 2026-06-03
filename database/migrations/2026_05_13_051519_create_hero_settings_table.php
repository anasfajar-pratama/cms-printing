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
        Schema::create('hero_settings', function (Blueprint $table) {
            $table->id();
            $table->string('eyebrow')->default('Sejak 2017 · Produsen Resmi · Indonesia');
            $table->string('title_line1')->default('Produsen Jersey Custom');
            $table->string('title_line2')->default('Textile Printing');
            $table->string('title_line3')->default('Berkualitas.');
            $table->text('description')->nullable();
            $table->string('btn1_label')->default('Konsultasi Sekarang');
            $table->string('btn1_url')->default('#');
            $table->string('btn2_label')->default('Request Penawaran');
            $table->string('btn2_url')->default('#');
            $table->string('btn3_label')->default('Lihat Portfolio');
            $table->string('btn3_url')->default('#portfolio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_settings');
    }
};
