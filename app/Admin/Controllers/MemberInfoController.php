<?php

namespace App\Admin\Controllers;

use App\Models\MemberInfo;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class MemberInfoController extends Controller
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

            $content->header('成员介绍');
            $content->description('这是成员介绍咯');

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

            $content->header('编辑成员');
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

            $content->header('创建成员');
            $content->description('描述');

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
        return Admin::grid(MemberInfo::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->name('名字')->badge('green');
            $grid->avatar('头像')->image();
            $grid->job('职位')->badge('red');
            //$grid->created_at('创建时间');
            $grid->disableExport();
            $grid->filter(function ($filter) {
                $filter->disableId();
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
        return Admin::form(MemberInfo::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('name', '名称');
            $form->text('job', '职称');
            $form->image('avatar', '头像')->uniqueName()->move('upload/member_info/avatar');
            // $form->display('created_at', '创建时间');
            // $form->display('updated_at', '更新时间');
        });
    }
}
