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
        Schema::create('produks', function (Blueprint $table) {
            $table->id('idProduk');
            $table->string('namaProduk');
            $table->string('fotoProduk')->nullable();
            $table->text('deskripsiProduk');
            $table->decimal('hargaProduk', 10, 2);
            $table->unsignedBigInteger('kategoriProduk_id');
            $table->foreign('kategoriProduk_id')->references('idKategori')->on('kategori_produk')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produks');
    }
};
