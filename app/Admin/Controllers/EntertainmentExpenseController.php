<?php

namespace App\Admin\Controllers;

use App\Models\EntertainmentExpense;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class EntertainmentExpenseController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'EntertainmentExpense';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new EntertainmentExpense());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('datetime_entertainment_expense', __('Datetime entertainment expense'))->sortable();
        $grid->column('entertainment_expense_creditor', __('Entertainment expense creditor'));
        $grid->column('rmb_entertainment_expense', __('Rmb entertainment expense'))->sortable();
        $grid->column('usd_entertainment_expense', __('Usd entertainment expense'));
        $grid->column('category_id', __('Category id'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();
        $grid->filter(function($filter) {
            $filter->between('datetime_entertainment_expense', '記録日')->datetime();
            $filter->like('entertainment_expense_creditor', '支払項目');
            $filter->like('rmb_entertainment_expense', '支払（RMB）');
            $filter->like('usd_entertainment_expense', '支払（USD）');
            $filter->between('created_at', '登録日')->datetime();
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
        $show = new Show(EntertainmentExpense::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('datetime_entertainment_expense', __('Datetime entertainment expense'));
        $show->field('entertainment_expense_creditor', __('Entertainment expense creditor'));
        $show->field('rmb_entertainment_expense', __('Rmb entertainment expense'));
        $show->field('usd_entertainment_expense', __('Usd entertainment expense'));
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
        $form = new Form(new EntertainmentExpense());

        $form->date('datetime_entertainment_expense', __('Datetime entertainment expense'))->default(date('Y-m-d'));
        $form->text('entertainment_expense_creditor', __('Entertainment expense creditor'));
        $form->decimal('rmb_entertainment_expense', __('Rmb entertainment expense'));
        $form->decimal('usd_entertainment_expense', __('Usd entertainment expense'));
        $form->number('category_id', __('Category id'));

        return $form;
    }
}
