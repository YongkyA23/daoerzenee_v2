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
        Schema::create('kategori_fotos', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->string('namaKategoriFoto')->unique();
            $table->string('slug')->unique();
            $table->text('deskripsiKategori')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori_fotos');
    }
};
