<?php

namespace App\Admin\Controllers;

use App\Models\Post;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class IndexController extends Controller
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

            $content->header('版面图文');
            $content->description('含Web端首页、获奖记录、关于一树页面的图文展示信息');

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

            $content->header('版面图文');
            $content->description('编辑');

            $content->body($this->form($id)->edit($id));
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

            $content->header('版面图文');
            $content->description('添加');

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
        return Admin::grid(Post::class, function (Grid $grid) {
          // dd(Post::with('category')->find(1));
            $ids = [2, 9, 10, 13];
            $grid->model()->whereIn('category_id', $ids);
            // $grid->id('ID')->sortable();
            $grid->column('category.title', '所属分类')->badge('green');
            $grid->title('标题')->badge('blue');
            $grid->description('简述')->display( function ($str) {
                return strlen($str) < 30 ? $str : mb_substr($str, 0, 30).' ......';
            })->badge('yellow');
            $grid->image('主图')->image();
            // $states = [
            //     'on'  => ['value' => 1, 'text' => 'Yes', 'color' => 'success'],
            //     'off' => ['value' => 0, 'text' => 'No', 'color' => 'danger'],
            // ];
            // $grid->status('显示？')->switch($states);
            $grid->created_at('发布时间');

            $grid->disableRowSelector();
            $grid->disableExport();
            $grid->disableCreation();
            $grid->disablePagination();
            $grid->actions(function ($actions) {
                $actions->disableDelete();
            });
            $grid->filter(function ($filter) {
                  $filter->disableIdFilter();
                  $filter->like('title', '标题');
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form($id = '')
    {
        return Admin::form(Post::class, function (Form $form) use ($id) {

            // $form->display('id', 'ID');
            $form->display('category.title', '所属分类');
            $form->text('title', '图文标题')->rules('required');
            $form->text('description', '图文简述')->rules('required');
            $form->editor('body', '图文内容')->rules('required');
            $form->image('image', '图文主图')->removable()->uniqueName()->move('upload/webindex/image')->rules('required');
            $form->multipleImage('banner_image', '图文组图')->removable()->uniqueName()->move('upload/webindex/banner_image');
            // $states = [
            //     'on'  => ['value' => 1, 'text' => 'Yes', 'color' => 'success'],
            //     'off' => ['value' => 0, 'text' => 'No', 'color' => 'danger'],
            // ];
            // $form->switch('status', '是否显示')->states($states);
            // $form->saving(function (Form $form) use ($id) {
            //     $cate_id = Post::find($id)->value('category_id');
            //     $form->category_id = $cate_id;
            // });
        });
    }
}
