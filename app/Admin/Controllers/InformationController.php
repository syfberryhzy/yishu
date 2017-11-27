<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\Post;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class InformationController extends Controller
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

            $content->header('官网资讯');
            $content->description('官网一点资讯');

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

            $content->header('修改资讯');
            $content->description('修改资讯咯');

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

            $content->header('添加官网资讯');
            $content->description('添加官网资讯咯');

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
            $grid->model()->where('category_id', '4')->orderBy('id', 'desc');
            $grid->id('ID')->sortable();
            $grid->title('文章标题')->badge('green');
            $grid->image('文章配图')->image();
            $grid->created_at('发布时间');
            $grid->disableExport();
            $grid->filter( function ($filter) {
                $filter->disableIdFilter();
                $filter->where(function ($query) {
                    $query->where('title', 'like', "%{$this->input}%");
                }, '标题');
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
        return Admin::form(Post::class, function (Form $form) {

            $form->display('id', 'ID')->setWidth(10, 2);
            $form->display('category_id', '分类名称')->default('4');
            $form->text('title', '资讯名称');
            $form->editor('body', '资讯内容');
            $form->text('description', '资讯描述');
            $form->image('image', '主图')->removeable()->uniqueName()->move('/upload/information/image');
            $form->multipleImage('banner_image', '轮播图')->removable()->uniqueName()->move('upload/company_introduce/banner_image');
            // $form->display('created_at', 'Created At');
            // $form->display('updated_at', 'Updated At');
            $form->saving(function (Form $form) {
                $form->category_id = 4;
            });
        });
    }
}
