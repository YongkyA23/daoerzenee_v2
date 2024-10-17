<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Galeri extends Model
{
    protected $fillable = [
        'namaFoto',
        'pathFoto',
        'deskripsiFoto',
        'kategoriFoto_id'
    ];
    public function kategoriFoto(): BelongsTo
    {
        return $this->belongsTo(KategoriFoto::class, 'kategoriFoto_id', 'id');
    }
}
