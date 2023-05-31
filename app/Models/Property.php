<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'owner_id',
        'name',
        'city_id',
        'address_street',
        'address_postcode',
        'lat',
        'long',
    ];
//Registering the Observer

public static function booted()
    {
        parent::booted();

        self::observe(PropertyObserver::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
