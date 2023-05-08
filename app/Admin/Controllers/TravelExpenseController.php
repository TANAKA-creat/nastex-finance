<?php

namespace App\Admin\Controllers;

use App\Models\TravelExpense;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TravelExpenseController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'TravelExpense';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new TravelExpense());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('datetime_travel_expense', __('Datetime travel expense'))->sortable();
        $grid->column('travel_expense_creditor', __('Travel expense creditor'));
        $grid->column('rmb_travel_expense', __('Rmb travel expense'))->sortable();
        $grid->column('usd_travel_expense', __('Usd travel expense'));
        $grid->column('category_id', __('Category id'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();
        $grid->filter(function($filter) {
            $filter->between('datetime_travel_expense','記録日')->datetime();
            $filter->like('travel_expense_creditor', '支払項目');
            $filter->like('rmb_travel_expense','支払（RMB）');
            $filter->like('usd_travel_expense','支払（USD）');
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
        $show = new Show(TravelExpense::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('datetime_travel_expense', __('Datetime travel expense'));
        $show->field('travel_expense_creditor', __('Travel expense creditor'));
        $show->field('rmb_travel_expense', __('Rmb travel expense'));
        $show->field('usd_travel_expense', __('Usd travel expense'));
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
        $form = new Form(new TravelExpense());

        $form->date('datetime_travel_expense', __('Datetime travel expense'))->default(date('Y-m-d'));
        $form->text('travel_expense_creditor', __('Travel expense creditor'));
        $form->decimal('rmb_travel_expense', __('Rmb travel expense'));
        $form->decimal('usd_travel_expense', __('Usd travel expense'));
        $form->number('category_id', __('Category id'));

        return $form;
    }
}
