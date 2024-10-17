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

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($kategoriFoto) {
            if (empty($kategoriFoto->slug)) {
                $slug = Str::slug($kategoriFoto->namaKategoriFoto);

                // Ensure unique slug by appending number if the slug already exists
                $count = static::where('slug', 'LIKE', "{$slug}%")->count();
                $kategoriFoto->slug = $count ? "{$slug}-{$count}" : $slug;
            }
        });
    }
}
