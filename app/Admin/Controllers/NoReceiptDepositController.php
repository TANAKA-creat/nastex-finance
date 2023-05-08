<?php

namespace App\Admin\Controllers;

use App\Models\NoReceiptDeposit;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NoReceiptDepositController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'NoReceiptDeposit';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new NoReceiptDeposit());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('datetime_no_receipt_deposit', __('Datetime no receipt deposit'))->sortable();
        $grid->column('no_receipt_deposit_customer', __('No receipt deposit customer'));
        $grid->column('rmb_no_receipt_deposit', __('Rmb no receipt deposit'))->sortable();
        $grid->column('usd_no_receipt_deposit', __('Usd no receipt deposit'));
        $grid->column('category_id', __('Category id'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();
        $grid->filter(function($filter) {
            $filter->between('datetime_no_receipt_deposit', '記録日')->datetime();
            $filter->like('no_receipt_deposit_customer', '顧客名');
            $filter->like('rmb_no_receipt_deposit', '入金（RMB）');
            $filter->like('usd_no_receipt_deposit', '入金（USD）');
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
        $show = new Show(NoReceiptDeposit::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('datetime_no_receipt_deposit', __('Datetime no receipt deposit'));
        $show->field('no_receipt_deposit_customer', __('No receipt deposit customer'));
        $show->field('rmb_no_receipt_deposit', __('Rmb no receipt deposit'));
        $show->field('usd_no_receipt_deposit', __('Usd no receipt deposit'));
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
        $form = new Form(new NoReceiptDeposit());

        $form->date('datetime_no_receipt_deposit', __('Datetime no receipt deposit'))->default(date('Y-m-d'));
        $form->text('no_receipt_deposit_customer', __('No receipt deposit customer'));
        $form->decimal('rmb_no_receipt_deposit', __('Rmb no receipt deposit'));
        $form->decimal('usd_no_receipt_deposit', __('Usd no receipt deposit'));
        $form->number('category_id', __('Category id'));

        return $form;
    }
}
