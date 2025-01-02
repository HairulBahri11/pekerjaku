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
        Schema::create('foto_detail_pekerjaan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pekerja_id')->nullable();
            $table->foreign('pekerja_id')->references('id')->on('pekerja')->onDelete('cascade')->onUpdate('cascade');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_detail_pekerjaan');
    }
};
