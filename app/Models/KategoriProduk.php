<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class KategoriProduk extends Model
{
    protected $fillable = [
        'namaKategori',
        'slug',
        'deskripsiKategori',
    ];
    public function produk(): HasMany
    {
        return $this->hasMany(Produk::class, 'kategoriProduk_id', 'id');
    }

    protected static function booted()
    {
        static::creating(function ($kategoriProduk) {
            if (empty($kategoriProduk->slug)) {
                $kategoriProduk->slug = Str::slug($kategoriProduk->namaKategori);
            }
        });
    }
}
