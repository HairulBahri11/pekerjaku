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
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('majikan_id')->nullable();
            $table->foreign('majikan_id')->references('id')->on('majikan')->onDelete('cascade')->onUpdate('cascade');
            $table->string('jenis_pekerjaan');
            $table->integer('jumlah');
            $table->string('durasi');
            $table->string('lokasi');
            $table->date('tgl_mulai');
            $table->string('jam_kerja');
            $table->string('upah');
            $table->text('deskripsi_pekerjaan');
            $table->text('kualifikasi');
            $table->text('keterampilan');
            $table->string('bahasa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};
