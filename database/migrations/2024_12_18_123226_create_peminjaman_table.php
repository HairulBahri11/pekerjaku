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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id')->nullable();
            $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('buku_id')->nullable();
            $table->foreign('buku_id')->references('id')->on('buku')->onDelete('cascade')->onDelete('cascade');
            $table->date('tgl_peminjaman');
            $table->date('tgl_jatuh_tempo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
