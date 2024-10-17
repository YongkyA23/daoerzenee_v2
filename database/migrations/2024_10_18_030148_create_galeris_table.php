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
        Schema::create('galeris', function (Blueprint $table) {
            $table->id();
            $table->string('namaFoto');
            $table->unsignedBigInteger('kategoriFoto_id');
            $table->text('deskripsiFoto');
            $table->string('pathFoto');
            $table->foreign('kategoriFoto_id')->references('id')->on('kategori_fotos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('galeris');
    }
};
