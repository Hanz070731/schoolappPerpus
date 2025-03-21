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
        Schema::create('pustakawan', function (Blueprint $table) {
            $table->increments('idpustakawan'); // Primary key, auto-increment
            $table->string('nama'); // Nama pustakawan
            $table->string('jabatan'); // Jabatan pustakawan
            $table->string('email')->unique(); // Email pustakawan (unik)
            $table->string('foto')->nullable(); // Foto (opsional)
            $table->timestamps(); // Kolom created_at dan updated_at
            $table->softDeletes(); // Kolom deleted_at untuk soft delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pustakawan'); // Hapus tabel pustakawan
    }
};