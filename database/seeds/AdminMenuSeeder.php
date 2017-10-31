<?php

use Illuminate\Database\Seeder;
use Encore\Admin\Auth\Database\Administrator;
use Encore\Admin\Auth\Database\Role;
use Encore\Admin\Auth\Database\Permission;
use Encore\Admin\Auth\Database\Menu;

class AdminMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create a user.
        Administrator::truncate();
        Administrator::create([
            'username'  => 'admin',
            'password'  => bcrypt('admin'),
            'name'      => 'Administrator',
        ]);

        // create a role.
        Role::truncate();
        Role::create([
            'name'  => 'Administrator',
            'slug'  => 'administrator',
        ]);

        // add role to user.
        Administrator::first()->roles()->save(Role::first());

        //create a permission
        Permission::truncate();
        Permission::insert([
            [
                'name'        => 'All permission',
                'slug'        => '*',
                'http_method' => '',
                'http_path'   => '*',
            ],
            [
                'name'        => 'Dashboard',
                'slug'        => 'dashboard',
                'http_method' => 'GET',
                'http_path'   => '/',
            ],
            [
                'name'        => 'Login',
                'slug'        => 'auth.login',
                'http_method' => '',
                'http_path'   => "/auth/login\r\n/auth/logout",
            ],
            [
                'name'        => 'User setting',
                'slug'        => 'auth.setting',
                'http_method' => 'GET,PUT',
                'http_path'   => '/auth/setting',
            ],
            [
                'name'        => 'Auth management',
                'slug'        => 'auth.management',
                'http_method' => '',
                'http_path'   => "/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs",
            ],
        ]);

        Role::first()->permissions()->save(Permission::first());

        // add default menus.
        Menu::truncate();
        Menu::insert([
            [
                'parent_id' => 0,
                'order'     => 1,
                'title'     => 'Index',
                'icon'      => 'fa-bar-chart',
                'uri'       => '/',
            ],
            [
                'parent_id' => 0,
                'order'     => 2,
                'title'     => 'Admin',
                'icon'      => 'fa-tasks',
                'uri'       => '',
            ],
            [
                'parent_id' => 2,
                'order'     => 3,
                'title'     => 'Users',
                'icon'      => 'fa-users',
                'uri'       => 'auth/users',
            ],
            [
                'parent_id' => 2,
                'order'     => 4,
                'title'     => 'Roles',
                'icon'      => 'fa-user',
                'uri'       => 'auth/roles',
            ],
            [
                'parent_id' => 2,
                'order'     => 5,
                'title'     => 'Permission',
                'icon'      => 'fa-ban',
                'uri'       => 'auth/permissions',
            ],
            [
                'parent_id' => 2,
                'order'     => 6,
                'title'     => 'Menu',
                'icon'      => 'fa-bars',
                'uri'       => 'auth/menu',
            ],
            [
                'parent_id' => 2,
                'order'     => 7,
                'title'     => 'Operation log',
                'icon'      => 'fa-history',
                'uri'       => 'auth/logs',
            ],
            //8
            [
                'parent_id' => 0,
                'order'     => 8,
                'title'     => '分类管理',
                'icon'      => 'fa-tree',
                'uri'       => 'categories',
            ],
            [
                'parent_id' => 0,
                'order'     => 10,
                'title'     => '案例描述',
                'icon'      => 'fa-link',
                'uri'       => 'case_introduce',
            ],
            [
                'parent_id' => 0,
                'order'     => 16,
                'title'     => '官网资讯',
                'icon'      => 'fa-bars',
                'uri'       => 'informations',
            ],
            [
                'parent_id' => 0,
                'order'     => 11,
                'title'     => '获奖记录',
                'icon'      => 'fa-angellist',
                'uri'       => 'records',
            ],
            [
                'parent_id' => 0,
                'order'     => 9,
                'title'     => '一树版面',
                'icon'      => 'fa-heart',
                'uri'       => '',
            ],
            [
                'parent_id' => 12,
                'order'     => 11,
                'title'     => '版面图文',
                'icon'      => 'fa-anchor',
                'uri'       => 'web_index',
            ],
            [
                'parent_id' => 12,
                'order'     => 12,
                'title'     => '成员介绍',
                'icon'      => 'fa-user',
                'uri'       => 'member_info',
            ],
            [
                'parent_id' => 0,
                'order'     => 17,
                'title'     => '系统设置',
                'icon'      => 'fa-cog',
                'uri'       => 'system_info',
            ]
        ]);

        // add role to menu.
        Menu::find(2)->roles()->save(Role::first());
    }
}
