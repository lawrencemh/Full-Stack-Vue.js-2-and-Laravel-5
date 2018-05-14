<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'images',
        'thumb',
    ];

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

    /**
     * Get the image array for this listing.
     *
     * @return array
     */
    public function getImagesAttribute()
    {
        $array['image_1'] = asset("images/{$this->id}/Image_1.jpg");
        $array['image_2'] = asset("images/{$this->id}/Image_2.jpg");
        $array['image_3'] = asset("images/{$this->id}/Image_3.jpg");
        $array['image_4'] = asset("images/{$this->id}/Image_4.jpg");

        return $array;
    }

    /**
     * Get the image src for this listing's thumbnail.
     *
     * @return string
     */
    public function getThumbAttribute()
    {
        return asset("images/{$this->id}/Image_1_thumb.jpg");
    }
}
