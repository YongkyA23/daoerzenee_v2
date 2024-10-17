<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Produk extends Model
{
    protected $fillable = [
        'namaProduk',
        'pathFoto',
        'slug',
        'deskripsiProduk',
        'hargaProduk',
        'kategoriProduk_id'
    ];
    public function kategoriProduk(): BelongsTo
    {
        return $this->belongsTo(KategoriProduk::class, 'kategoriProduk_id', 'id');
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($product) {
            if (empty($product->slug)) {
                $slug = Str::slug($product->namaProduk);
                $count = static::where('slug', 'LIKE', "{$slug}%")->count();
                $product->slug = $count ? "{$slug}-{$count}" : $slug;
            }
        });
    }
}
