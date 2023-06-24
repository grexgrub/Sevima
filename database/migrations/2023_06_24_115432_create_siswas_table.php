<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('email')->nullable();
            $table->string('kelas');
            $table->integer('noSiswa');
            $table->boolean('noAbsen')->default(false);
            $table->string('token')->nullable();
            $table->string('password')->nullable();
            $table->string('jenisKelamin')->nullable();
            $table->integer('umur')->nullable();
            $table->integer('noAbsen');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
