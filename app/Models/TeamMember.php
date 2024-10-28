<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = ['name', 'position_id', 'location_id', 'phone', 'photo'];

    // Define the relationship with Position
    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    // Define the relationship with Location
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}

