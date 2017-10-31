<?php

namespace App\Admin\Extensions\Tools;

use Encore\Admin\Admin;
use Encore\Admin\Grid\Tools\AbstractTool;
use Illuminate\Support\Facades\Request;

class PostType extends AbstractTool
{
    public function script()
    {
        $url = Request::fullUrlWithQuery(['posttype' => '_posttype_']);

        return <<<EOT

$('input:radio.order-gender').change(function () {

    var url = "$url".replace('_posttype_', $(this).val());

    $.pjax({container:'#pjax-container', url: url });

});

EOT;
    }

    public function render()
    {
        Admin::script($this->script());
        $options = [
            'all'   => '全部图文',
            '1'     => '首页',
            '2'     => '猎头服务',
            '3'     => '咨询服务',
            '4'     => '热门职位',
            '5'     => '新闻资讯',
            '6'     => '关于我们',
        ];

        return view('admin.tools.posttype', compact('options'));
    }
}
