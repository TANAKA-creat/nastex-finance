<?php

namespace App\Admin\Controllers;

use App\Models\Other;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OtherController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Other';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Other());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('datetime_other', __('Datetime other'))->sortable();
        $grid->column('other_creditor', __('Other creditor'));
        $grid->column('rmb_other', __('Rmb other'))->sortable();
        $grid->column('usd_other', __('Usd other'));
        $grid->column('category_id', __('Category id'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();
        $grid->filter(function($filter) {
            $filter->between('datetime_other','記録日')->datetime();
            $filter->like('other_creditor', '支払項目');
            $filter->like('rmb_other','支払（RMB）');
            $filter->like('usd_other','支払（USD）');
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
        $show = new Show(Other::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('datetime_other', __('Datetime other'));
        $show->field('other_creditor', __('Other creditor'));
        $show->field('rmb_other', __('Rmb other'));
        $show->field('usd_other', __('Usd other'));
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
        $form = new Form(new Other());

        $form->date('datetime_other', __('Datetime other'))->default(date('Y-m-d'));
        $form->text('other_creditor', __('Other creditor'));
        $form->decimal('rmb_other', __('Rmb other'));
        $form->decimal('usd_other', __('Usd other'));
        $form->number('category_id', __('Category id'));

        return $form;
    }
}
