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
        Schema::create('lokasi_kerja', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pekerja_id')->nullable();
            $table->foreign('pekerja_id')->references('id')->on('pekerja')->onDelete('cascade')->onUpdate('cascade');
            $table->string('kota');
            $table->string('provinsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lokasi_kerja');
    }
};
