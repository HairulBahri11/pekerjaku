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
        Schema::create('pekerja', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('latar_belakang_id')->nullable();
            $table->foreign('latar_belakang_id')->references('id')->on('latar_belakang')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('profesi_id')->nullable();
            $table->foreign('profesi_id')->references('id')->on('profesi')->onDelete('cascade')->onUpdate('cascade');
            $table->string('total_pengalaman');
            $table->string('pendidikan_terakhir');
            $table->integer('gaji_bulanan');
            $table->date('tgl_lahir');
            $table->string('agama');
            $table->text('deskripsi');
            $table->integer('tinggi');
            $table->integer('berat');
            $table->string('suku');
            $table->enum('status', ['tersedia', 'segera_tersedia', 'infal']);
            $table->enum('status_pribadi', ['Menikah', 'Belum Menikah', 'Janda', 'Duda']);
            $table->enum('status_active', ['active', 'in-active', 'proccess']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pekerja');
    }
};
