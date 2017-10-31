<?php

namespace App\Admin\Controllers;

use App\Models\SystemInfo;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class SystemInfoController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('系统设置');
            $content->description('描述');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('编辑设置');
            $content->description('描述');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('创建');
            $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(SystemInfo::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->address('地址');
            $grid->phone('电话');
            $grid->email('邮箱');
            $grid->qrcode('二维码')->image();

            $grid->disableCreation();
            $grid->disableRowSelector();
            $grid->disableFilter();
            $grid->disableExport();
            $grid->disablePagination();
            $grid->actions(function ($actions) {
                $actions->disableDelete();
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(SystemInfo::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('address', '地址');
            $form->mobile('phone', '电话');
            $form->email('email', '邮箱');
            $form->image('qrcode', '二维码')->uniqueName()->move('upload/system_info/image');
            //$form->display('created_at', '创建时间');
            //$form->display('updated_at', 'Updated At');
        });
    }
}
