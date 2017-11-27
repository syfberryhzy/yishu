<?php

namespace App\Admin\Controllers;

use App\Models\Post;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class CompanyIntroduceController extends Controller
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

            $content->header('公司介绍');
            $content->description('这是公司的简介咯');

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

            $content->header('header');
            $content->description('description');

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

            $content->header('添加公司介绍');
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
        return Admin::grid(Post::class, function (Grid $grid) {
            $grid->model()->where('category_id', '9')->orderBy('id', 'desc');
            $grid->id('ID')->sortable();
            $grid->title('介绍标题');

            // $grid->image('介绍配图')->display(function ($image) {

            //     if ($image != '') {
            //         $image = config('app.url') .'/storage/' . $image;
            //     }

            //     if (preg_match('/^http:\/\//', $image)) {
            //         return '<img src="'. $image. '" width="80"/>';
            //     } else {
            //         return '无图片';
            //     }
            // });
            $grid->image('介绍配图')->image();
            $grid->banner_image('轮播图')->image();
            $grid->created_at();
            $grid->updated_at();
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

            $form->display('id', 'ID');
            $form->display('category_id', '所属分类')->default('公司介绍');
            // $form->display('category_id', '分类名称')->default('9');
            $form->text('title', '简介标题');
            $form->editor('body', '简介内容');
            $form->image('image', '介绍主图')->removeable()->uniqueName()->move('upload/company_introduce/image');
            $form->multipleImage('banner_image', '轮播图')->removable()->uniqueName()->move('upload/company_introduce/banner_image');
            $form->text('description', '描述');
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');

            $form->saving(function (Form $form) {
                $form->category_id = 9;
            });
        });
    }
}
