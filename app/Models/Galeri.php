<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Galeri extends Model
{
    protected $fillable = [
        'namaFoto',
        'slug',
        'pathFoto',
        'deskripsiFoto',
        'kategoriFoto_id'
    ];
    public function kategoriFoto(): BelongsTo
    {
        return $this->belongsTo(KategoriFoto::class, 'kategoriFoto_id', 'id');
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($galeri) {
            if (empty($galeri->slug)) {
                $slug = Str::slug($galeri->namaFoto);

                // Ensure unique slug by appending number if the slug already exists
                $count = static::where('slug', 'LIKE', "{$slug}%")->count();
                $galeri->slug = $count ? "{$slug}-{$count}" : $slug;
            }
        });
    }
}
