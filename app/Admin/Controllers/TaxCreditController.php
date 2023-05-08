<?php

namespace App\Admin\Controllers;

use App\Models\TaxCredit;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TaxCreditController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'TaxCredit';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new TaxCredit());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('datetime_tax_credit', __('Datetime tax credit'))->sortable();
        $grid->column('tax_creditor', __('Tax creditor'));
        $grid->column('rmb_tax_credit', __('Rmb tax credit'))->sortable();
        $grid->column('usd_tax_credit', __('Usd tax credit'));
        $grid->column('category_id', __('Category id'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();
        $grid->filter(function($filter) {
            $filter->between('datetime_tax_credit','記録日')->datetime();
            $filter->like('tax_creditor', '支払項目');
            $filter->like('rmb_tax_credit','支払（RMB）');
            $filter->like('usd_tax_credit','支払（USD）');
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
        $show = new Show(TaxCredit::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('datetime_tax_credit', __('Datetime tax credit'));
        $show->field('tax_creditor', __('Tax creditor'));
        $show->field('rmb_tax_credit', __('Rmb tax credit'));
        $show->field('usd_tax_credit', __('Usd tax credit'));
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
        $form = new Form(new TaxCredit());

        $form->date('datetime_tax_credit', __('Datetime tax credit'))->default(date('Y-m-d'));
        $form->text('tax_creditor', __('Tax creditor'));
        $form->decimal('rmb_tax_credit', __('Rmb tax credit'));
        $form->decimal('usd_tax_credit', __('Usd tax credit'));
        $form->number('category_id', __('Category id'));

        return $form;
    }
}
