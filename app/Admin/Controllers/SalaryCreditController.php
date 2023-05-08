<?php

namespace App\Admin\Controllers;

use App\Models\SalaryCredit;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SalaryCreditController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'SalaryCredit';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SalaryCredit());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('datetime_salary_credit', __('Datetime salary credit'))->sortable();
        $grid->column('salary_creditor', __('Salary creditor'));
        $grid->column('rmb_salary_credit', __('Rmb salary credit'))->sortable();
        $grid->column('usd_salary_credit', __('Usd salary credit'));
        $grid->column('category_id', __('Category id'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();
        $grid->filter(function($filter) {
            $filter->between('datetime_salary_credit','記録日')->datetime();
            $filter->like('salary_creditor', '支払項目');
            $filter->like('rmb_salary_credit','支払（RMB）');
            $filter->like('usd_salary_credit','支払（USD）');
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
        $show = new Show(SalaryCredit::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('datetime_salary_credit', __('Datetime salary credit'));
        $show->field('salary_creditor', __('Salary creditor'));
        $show->field('rmb_salary_credit', __('Rmb salary credit'));
        $show->field('usd_salary_credit', __('Usd salary credit'));
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
        $form = new Form(new SalaryCredit());

        $form->date('datetime_salary_credit', __('Datetime salary credit'))->default(date('Y-m-d'));
        $form->text('salary_creditor', __('Salary creditor'));
        $form->decimal('rmb_salary_credit', __('Rmb salary credit'));
        $form->decimal('usd_salary_credit', __('Usd salary credit'));
        $form->number('category_id', __('Category id'));

        return $form;
    }
}
