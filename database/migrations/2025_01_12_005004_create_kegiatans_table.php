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
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('title'); // Judul Berita
            $table->string('slug')->unique();
            $table->text('deskripsi'); // Deskripsi Berita
            $table->string('tempat')->nullable(); // Menyimpan path gambar
            $table->string('biaya_pendaftaran'); // Menyimpan path gambar
            $table->date('jadwal'); // Menyimpan path gambar
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatans');
    }
};
