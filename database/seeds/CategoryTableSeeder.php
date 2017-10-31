<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::firstOrNew(['title' => '案例介绍']);
        if (!$category->exists) {
            $category->fill([
                'title'       => '案例介绍',
                'description' => '每位伙伴,我们都用百分百的诚意来服务',
                'order' => 0
            ])->save();
        }

        $category = Category::firstOrNew(['title' => '获奖记录']);
        if (!$category->exists) {
            $category->fill([
                'title'       => '获奖记录',
                'order' => 0
            ])->save();
        }

        $category = Category::firstOrNew(['title' => '关于一树']);
        if (!$category->exists) {
            $category->fill([
                'title'       => '关于一树',
                'order' => 0
            ])->save();
        }

        $category = Category::firstOrNew(['title' => '官网资讯']);
        if (!$category->exists) {
            $category->fill([
                'title'       => '官网资讯',
                'order' => 0
            ])->save();
        }

        $category = Category::firstOrNew(['title' => '联系我们']);
        if (!$category->exists) {
            $category->fill([
                'title'       => '联系我们',
                'order' => 0
            ])->save();
        }

        Category::insert([
            0 => [
                'id' => 11,
                'title' => '文创',
                'description' => '',
                'order' => 0,
                'parent_id' => 1
            ],
            1 => [
                'id' => 12,
                'title' => '包装',
                'description' => '',
                'order' => 0,
                'parent_id' => 1
            ],
            2 => [
                'id' => 8,
                'title' => 'VI',
                'description' => '',
                'order' => 0,
                'parent_id' => 1
            ],
            3 => [
                'id' => 9,
                'title' => 'Company 公司介绍',
                'description' => '',
                'order' => 0,
                'parent_id' => 3
            ],
            4 => [
                'id' => 10,
                'title' => 'Team 团队介绍',
                'description' => '',
                'order' => 0,
                'parent_id' => 3
            ],
            5 => [
                'id' => 13,
                'title' => '首页',
                'description' => 'web首页',
                'order' => 1,
                'parent_id' => 0
            ],

        ]);

    }
}
