<?php

namespace App\Admin\Controllers;

use App\Models\Post;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class MemberIntroduceController extends Controller
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

            $content->header('团队介绍');
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

            $content->header('编辑团队介绍');
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

            $content->header('创建团队介绍');
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
            $grid->model()->where('category_id', '10');
            $grid->id('ID')->sortable();
            $grid->title('标题')->badge('red');
            $grid->image('主图')->image();
            $grid->description('简介')->badge('green');
            $grid->disableExport();
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

            $form->display('category_id', 'ID');
            $form->text('title', '标题');
            $form->text('description', '简介');
            $form->editor('body', '详情');
            $form->image('image', '主图')->uniqueName()->move('upload/member_introduce/image');
            $form->multipleImage('banner_image', '轮播图')->removable()->uniqueName()->move('upload/member_introduce/banner_image');

            $form->saving( function (Form $form) {
                $form->category_id = 10;
            });
        });
    }
}
