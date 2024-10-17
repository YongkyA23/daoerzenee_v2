<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class KategoriFoto extends Model
{
    protected $fillable = [
        'namaKategoriFoto',
        'slug',
        'deskripsiKategori',
    ];
    public function galeri(): HasMany
    {
        return $this->hasMany(Galeri::class, 'kategoriFoto_id', 'id');
    }

    protected static function booted()
    {
        static::creating(function ($kategoriFoto) {
            if (empty($kategoriFoto->slug)) {
                $kategoriFoto->slug = Str::slug($kategoriFoto->namaKategori);
            }
        });
    }
}
