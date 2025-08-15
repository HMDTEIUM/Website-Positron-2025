<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('data_mahasiswa', function (Blueprint $table) {
            $table->string('nama_mahasiswa');
            $table->string('program_studi');
            $table->string('nim')->unique();
            $table->string('kelompok');
            $table->string('mentor');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_mahasiswa');
    }
};
