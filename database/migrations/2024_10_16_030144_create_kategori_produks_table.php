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
        Schema::create('kategori_produks', function (Blueprint $table) {
            $table->id();
            $table->string('namaKategori');
            $table->string('slug')->unique();
            $table->text('deskripsiKategori')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kategori_produks');
    }
};
