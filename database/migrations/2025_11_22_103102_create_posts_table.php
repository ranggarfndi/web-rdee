<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul
            $table->string('slug')->unique(); // URL
            $table->string('image')->nullable(); // Gambar
            $table->text('content'); // Isi Artikel
            $table->boolean('is_active')->default(true); // Status Tayang
            $table->timestamps(); // <--- WAJIB ADA (ini yang bikin error tadi)
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
