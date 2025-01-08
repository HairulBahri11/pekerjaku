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
        Schema::create('file_berkas_majikan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('majikan_id')->nullable();
            $table->foreign('majikan_id')->references('id')->on('majikan')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_file');
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
