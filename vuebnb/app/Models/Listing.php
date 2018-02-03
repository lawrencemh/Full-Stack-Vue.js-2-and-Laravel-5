<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'amenity_wifi'         => 'bool',
        'amenity_pets_allowed' => 'bool',
        'amenity_kitchen'      => 'bool',
        'amenity_breakfast'    => 'bool',
        'amenity_laptop'       => 'bool',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'address',
        'about',
        'amenity_wifi',
        'amenity_pets_allowed',
        'amenity_kitchen',
        'amenity_breakfast',
        'amenity_laptop',
        'price_per_night',
        'price_extra_people',
        'price_weekly_discount',
        'price_monthly_discount',
    ];
}
