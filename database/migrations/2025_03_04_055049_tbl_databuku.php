<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id('idbuku'); // Primary key
            $table->string('judul');
            $table->string('penulis');
            $table->text('deskripsi');
            $table->string('edisi');
            $table->string('isbn');
            $table->string('deskripsi_fisik');
            $table->string('judul_seri')->nullable();
            $table->string('no_panggil');
            $table->integer('jumlah_buku');
            $table->longText('gambar')->nullable();
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('buku');
    }
};
