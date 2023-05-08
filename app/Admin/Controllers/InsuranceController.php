<?php

namespace App\Admin\Controllers;

use App\Models\Insurance;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class InsuranceController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Insurance';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Insurance());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('datetime_insurance', __('Datetime insurance'))->sortable();
        $grid->column('insurance_creditor', __('Insurance creditor'));
        $grid->column('rmb_insurance', __('Rmb insurance'))->sortable();
        $grid->column('usd_insurance', __('Usd insurance'));
        $grid->column('category_id', __('Category id'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();
        $grid->filter(function($filter) {
            $filter->between('datetime_insurance', '記録日')->datetime();
            $filter->like('insurance_creditor', '支払項目');
            $filter->like('rmb_insurance', '支払（RMB）');
            $filter->like('usd_insurance', '支払（USD）');
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
        $show = new Show(Insurance::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('datetime_insurance', __('Datetime insurance'));
        $show->field('insurance_creditor', __('Insurance creditor'));
        $show->field('rmb_insurance', __('Rmb insurance'));
        $show->field('usd_insurance', __('Usd insurance'));
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
        $form = new Form(new Insurance());

        $form->date('datetime_insurance', __('Datetime insurance'))->default(date('Y-m-d'));
        $form->text('insurance_creditor', __('Insurance creditor'));
        $form->decimal('rmb_insurance', __('Rmb insurance'));
        $form->decimal('usd_insurance', __('Usd insurance'));
        $form->number('category_id', __('Category id'));

        return $form;
    }
}
