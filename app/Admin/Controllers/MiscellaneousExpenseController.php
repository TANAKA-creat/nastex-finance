<?php

namespace App\Admin\Controllers;

use App\Models\MiscellaneousExpense;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MiscellaneousExpenseController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'MiscellaneousExpense';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new MiscellaneousExpense());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('datetime_miscellaneous_expense', __('Datetime miscellaneous expense'))->sortable();
        $grid->column('miscellaneous_expense_creditor', __('Miscellaneous expense creditor'));
        $grid->column('rmb_miscellaneous_expense', __('Rmb miscellaneous expense'))->sortable();
        $grid->column('usd_miscellaneous_expense', __('Usd miscellaneous expense'));
        $grid->column('category_id', __('Category id'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();
        $grid->filter(function($filter) {
            $filter->between('datetime_miscellaneous_expense','記録日')->datetime();
            $filter->like('miscellaneous_expense_creditor', '支払項目');
            $filter->like('rmb_miscellaneous_expense','支払（RMB）');
            $filter->like('usd_miscellaneous_expense','支払（USD）');
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
        $show = new Show(MiscellaneousExpense::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('datetime_miscellaneous_expense', __('Datetime miscellaneous expense'));
        $show->field('miscellaneous_expense_creditor', __('Miscellaneous expense creditor'));
        $show->field('rmb_miscellaneous_expense', __('Rmb miscellaneous expense'));
        $show->field('usd_miscellaneous_expense', __('Usd miscellaneous expense'));
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
        $form = new Form(new MiscellaneousExpense());

        $form->date('datetime_miscellaneous_expense', __('Datetime miscellaneous expense'))->default(date('Y-m-d'));
        $form->text('miscellaneous_expense_creditor', __('Miscellaneous expense creditor'));
        $form->decimal('rmb_miscellaneous_expense', __('Rmb miscellaneous expense'));
        $form->decimal('usd_miscellaneous_expense', __('Usd miscellaneous expense'));
        $form->number('category_id', __('Category id'));

        return $form;
    }
}
