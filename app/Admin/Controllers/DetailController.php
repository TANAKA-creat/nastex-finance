<?php

namespace App\Admin\Controllers;

use App\Models\Detail;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DetailController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Detail';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Detail());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('datetime', __('Datetime'))->sortable();
        $grid->column('customer', __('Customer'));
        $grid->column('rmb', __('Rmb'))->sortable();
        $grid->column('usd', __('Usd'));
        $grid->column('category_id', __('Category id'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();
        $grid->filter(function($filter) {
            $filter->between('datetime', '記録日')->datetime();
            $filter->like('customer', '顧客名');
            $filter->like('rmb', '入金（RMB）');
            $filter->like('usd', '入金（USD）');
            $filter->between('created_at','登録日')->datetime();
        });

    

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Detail::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('datetime', __('Datetime'));
        $show->field('customer', __('Customer'));
        $show->field('rmb', __('Rmb'));
        $show->field('usd', __('Usd'));
        $show->field('category_id', __('Category id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Detail());

        $form->date('datetime', __('Datetime'))->default(date('Y-m-d'));
        $form->text('customer', __('Customer'));
        $form->decimal('rmb', __('Rmb'));
        $form->decimal('usd', __('Usd'));
        $form->number('category_id', __('Category id'));

        return $form;
    }
}
