<?php

namespace App\Admin\Controllers;

use App\Models\LogisticsCost;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class LogisticsCostController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'LogisticsCost';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new LogisticsCost());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('datetime_logistics_cost', __('Datetime logistics cost'))->sortable();
        $grid->column('logistics_cost_creditor', __('Logistics cost creditor'));
        $grid->column('rmb_logistics_cost', __('Rmb logistics cost'))->sortable();
        $grid->column('usd_logistics_cost', __('Usd logistics cost'));
        $grid->column('category_id', __('Category id'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();
        $grid->filter(function($filter) {
            $filter->between('datetime_logistics_cost','記録日')->datetime();
            $filter->like('logistics_cost_creditor', '支払項目');
            $filter->like('rmb_logistics_cost','支払（RMB）');
            $filter->like('usd_logistics_cost','支払（USD）');
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
        $show = new Show(LogisticsCost::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('datetime_logistics_cost', __('Datetime logistics cost'));
        $show->field('logistics_cost_creditor', __('Logistics cost creditor'));
        $show->field('rmb_logistics_cost', __('Rmb logistics cost'));
        $show->field('usd_logistics_cost', __('Usd logistics cost'));
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
        $form = new Form(new LogisticsCost());

        $form->date('datetime_logistics_cost', __('Datetime logistics cost'))->default(date('Y-m-d'));
        $form->text('logistics_cost_creditor', __('Logistics cost creditor'));
        $form->decimal('rmb_logistics_cost', __('Rmb logistics cost'));
        $form->decimal('usd_logistics_cost', __('Usd logistics cost'));
        $form->number('category_id', __('Category id'));

        return $form;
    }
}
