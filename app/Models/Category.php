<?php

namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Category extends Model
{
    use ModelTree, AdminBuilder;

//    public function __construct(array $attributes = [])
//    {
//        parent::__construct($attributes);
//
//        $this->setParentColumn('pid');
//        $this->setOrderColumn('sort');
//        $this->setTitleColumn('name');
//    }

    public function childCategories()
    {
        return $this->hasMany(self::class, 'parent_id', 'id')->select('id', 'title', 'parent_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }
}
