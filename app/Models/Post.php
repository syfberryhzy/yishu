<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{
    const WEBINDEX_ID = 13;//首页id
    const STATUS_ON = 1;
    const STATUS_OFF = 0;

    protected $hidden = ['created_at', 'updated_at'];
    public function setBannerImageAttribute($banner_image)
    {
        if (is_array($banner_image)) {
            $this->attributes['banner_image'] = json_encode($banner_image);
        }
    }

    public function getBannerImageAttribute($banner_image)
    {
        return json_decode($banner_image, true);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
