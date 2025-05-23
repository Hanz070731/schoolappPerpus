<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('informasi', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('isi');
            $table->dateTime('tanggal_posting');
            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('informasi');
    }
};