<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produk extends Model
{
    protected $fillable = [
        'namaProduk',
        'pathFoto',
        'deskripsiProduk',
        'hargaProduk',
        'kategoriProduk_id'
    ];
    public function kategoriProduk(): BelongsTo
    {
        return $this->belongsTo(KategoriProduk::class, 'kategoriProduk_id', 'id');
    }
}
