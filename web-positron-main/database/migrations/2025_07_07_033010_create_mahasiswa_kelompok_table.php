<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mahasiswa_kelompok', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mahasiswa');
            $table->string('program_studi');
            $table->string('nama_kelompok');
            $table->string('penanggung_jawab');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa_kelompok');
    }
};
