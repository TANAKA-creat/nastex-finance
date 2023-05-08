<?php

namespace App\Admin\Controllers;

use App\Models\NoReceiptCredit;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NoReceiptCreditController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'NoReceiptCredit';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new NoReceiptCredit());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('datetime_no_receipt_credit', __('Datetime no receipt credit'))->sortable();
        $grid->column('no_receipt_credit_creditor', __('No receipt credit creditor'));
        $grid->column('rmb_no_receipt_credit', __('Rmb no receipt credit'))->sortable();
        $grid->column('usd_no_receipt_credit', __('Usd no receipt credit'));
        $grid->column('category_id', __('Category id'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();
        $grid->filter(function($filter) {
            $filter->between('datetime_no_receipt_credit','記録日')->datetime();
            $filter->like('no_receipt_credit_creditor', '支払項目');
            $filter->like('rmb_no_receipt_credit','支払（RMB）');
            $filter->like('usd_no_receipt_credit','支払（USD）');
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
        $show = new Show(NoReceiptCredit::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('datetime_no_receipt_credit', __('Datetime no receipt credit'));
        $show->field('no_receipt_credit_creditor', __('No receipt credit creditor'));
        $show->field('rmb_no_receipt_credit', __('Rmb no receipt credit'));
        $show->field('usd_no_receipt_credit', __('Usd no receipt credit'));
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
        $form = new Form(new NoReceiptCredit());

        $form->date('datetime_no_receipt_credit', __('Datetime no receipt credit'))->default(date('Y-m-d'));
        $form->text('no_receipt_credit_creditor', __('No receipt credit creditor'));
        $form->decimal('rmb_no_receipt_credit', __('Rmb no receipt credit'));
        $form->decimal('usd_no_receipt_credit', __('Usd no receipt credit'));
        $form->number('category_id', __('Category id'));

        return $form;
    }
}
