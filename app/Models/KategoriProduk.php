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

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($kategoriProduk) {
            // Only generate the slug if it's empty or null
            if (empty($kategoriProduk->slug)) {
                $slug = Str::slug($kategoriProduk->namaKategori);

                // Check if the slug already exists and append a number if necessary
                $count = static::where('slug', 'LIKE', "{$slug}%")->count();
                $kategoriProduk->slug = $count ? "{$slug}-{$count}" : $slug;
            }
        });
    }
}
