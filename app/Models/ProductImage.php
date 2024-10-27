<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductImage extends Model
{
    protected $fillable = ['produk_id', 'pathFoto'];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}
