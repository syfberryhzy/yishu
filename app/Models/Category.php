<?php

namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Category extends Model
{
    const CASE_ID = 1;//案例介绍
    const AWARD_ID = 2;//获奖记录
    const NEW_IDS = 4;//官网资讯
    const COMPANY_ID = 9;
    const TEAM_ID = 10;

    protected $hidden = ['created_at', 'updated_at'];
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
