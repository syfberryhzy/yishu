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

class CaseIntroduceController extends Controller
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

            $content->header('案例介绍');
            $content->description('详细的案例介绍咯');
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

            $content->header('编辑案例');
            $content->description('编辑案例咯');

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

            $content->header('添加案例');
            $content->description('添加案例咯');

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

            $grid->model()->whereIn('category_id',
                collect(Category::findOrFail(1)->childCategories)->pluck('id')
            )->orderBy('id', 'desc');

            $grid->id('ID')->sortable();
            $grid->title('案例名称')->badge('red');
            $grid->description('案例描述')->badge('yellow');
            $grid->column('category.title', '所属分类')->badge('green');
            $grid->image('案例主图')->image();
            $states = [
                'on'  => ['value' => 1, 'text' => 'Yes', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => 'No', 'color' => 'danger'],
            ];
            $grid->status('显示？')->switch($states);
            $grid->created_at('发布时间');
            $grid->disableExport();
            $grid->filter(function ($filter) {
                  $filter->disableIdFilter();
                  $filter->like('title', '案例名称');
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

            $form->display('id', 'ID');
            $form->select('category_id', '所属分类')->options(Category::findOrFail(1)->childCategories->pluck('title', 'id'));
            $form->text('title', '案例名称');
            $form->text('description', '案例描述');
            $form->editor('body', '案例详情');
            $form->image('image', '案例主图')->removeable()->uniqueName()->move('upload/cate_introduce/images');
            $form->multipleImage('banner_image', '案例组图')->removable()->uniqueName()->move('upload/cate_introduce/banner_image');

            $states = [
                'on'  => ['value' => 1, 'text' => 'Yes', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => 'No', 'color' => 'danger'],
            ];
            $form->switch('status', '是否显示')->states($states);

            $form->saving(function (Form $form) {
                //
            });
        });
    }
}
