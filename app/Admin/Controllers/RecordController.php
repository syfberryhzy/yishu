<?php

namespace App\Admin\Controllers;

use App\Models\Post;
use App\Models\Record;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class RecordController extends Controller
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

            $content->header('获奖记录');
            $content->description('所有的获奖记录都在这里~');

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

            $content->header('修改获奖记录');
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

            $content->header('添加获奖记录');
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
        return Admin::grid(Record::class, function (Grid $grid) {
            $grid->model()->orderBy('id', 'desc');
            $grid->id('ID')->sortable();
            $grid->name('获奖名称')->badge('red');
            $grid->english_name('英文名称')->badge('yellow');
            $grid->ranking('比赛名次')->badge('green');
            $grid->date('年份')->badge('blue');
            $grid->image('获奖图片')->image();

            $grid->disableExport();
            $grid->filter( function ($filter) {
                $filter->disableIdFilter();
                $filter->where(function ($query) {
                    $query->where('name', 'like', "%{$this->input}%")->orWhere('english_name', 'like', "%{$this->input}%");
                }, '名称或英文名称');
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
        return Admin::form(Record::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('name', '名称');
            $form->text('english_name', '英文名称');
            $form->text('ranking', '比赛名次哦');
            $form->year('date', '年份');
            $form->image('image', '获奖图片')->uniqueName()->move('upload/record/image');
            #$form->display('created_at', 'Created At');
            #$form->display('updated_at', 'Updated At');
        });
    }
}
