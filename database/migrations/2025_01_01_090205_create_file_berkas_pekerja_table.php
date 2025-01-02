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
        Schema::create('file_berkas_pekerja', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pekerja_id')->nullable();
            $table->foreign('pekerja_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_berkas');
            $table->string('lokasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file_berkas_majikan');
    }
};
