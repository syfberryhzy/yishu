<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('/case_introduce', 'CaseIntroduceController');
    $router->resource('/categories', 'CategoryController');
    $router->resource('/informations', 'InformationController');
    $router->resource('/records', 'RecordController');
    $router->resource('/company_introduce', 'CompanyIntroduceController');
    $router->resource('/member_info', 'MemberInfoController');
    $router->resource('/member_introduce', 'MemberIntroduceController');
    $router->resource('/system_info', 'SystemInfoController');
    $router->resource('/banners', 'BannerController');
    $router->resource('/web_index', 'IndexController');
});
