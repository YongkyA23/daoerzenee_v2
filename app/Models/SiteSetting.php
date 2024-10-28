<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $table = 'site_settings';
    protected $fillable = ['wa_number', 'ig_link', 'facebook_link', 'address', 'maps_link'];
    public $timestamps = true;

    public static function getSetting($key)
    {
        return self::where('key', $key)->first()->value ?? null;
    }

    public static function setSetting($key, $value)
    {
        return self::updateOrCreate(['key' => $key], ['value' => $value]);
    }
}
