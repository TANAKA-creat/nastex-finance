<?php

namespace App\Admin\Controllers;

use App\Models\OutsourcingDeposit;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OutsourcingDepositController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'OutsourcingDeposit';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new OutsourcingDeposit());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('datetime_outsourcing_deposit', __('Datetime outsourcing deposit'))->sortable();
        $grid->column('outsourcing_deposit_customer', __('Outsourcing deposit customer'));
        $grid->column('rmb_outsourcing_deposit', __('Rmb outsourcing deposit'))->sortable();
        $grid->column('usd_outsourcing_deposit', __('Usd outsourcing deposit'));
        $grid->column('category_id', __('Category id'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();
        $grid->filter(function($filter) {
            $filter->between('datetime_outsourcing_deposit', '記録日')->datetime();
            $filter->like('outsourcing_deposit_customer', '顧客名');
            $filter->like('rmb_outsourcing_deposit', '入金（RMB）');
            $filter->like('usd_outsourcing_deposit', '入金（USD）');
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
        $show = new Show(OutsourcingDeposit::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('datetime_outsourcing_deposit', __('Datetime outsourcing deposit'));
        $show->field('outsourcing_deposit_customer', __('Outsourcing deposit customer'));
        $show->field('rmb_outsourcing_deposit', __('Rmb outsourcing deposit'));
        $show->field('usd_outsourcing_deposit', __('Usd outsourcing deposit'));
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
        $form = new Form(new OutsourcingDeposit());

        $form->date('datetime_outsourcing_deposit', __('Datetime outsourcing deposit'))->default(date('Y-m-d'));
        $form->text('outsourcing_deposit_customer', __('Outsourcing deposit customer'));
        $form->decimal('rmb_outsourcing_deposit', __('Rmb outsourcing deposit'));
        $form->decimal('usd_outsourcing_deposit', __('Usd outsourcing deposit'));
        $form->number('category_id', __('Category id'));

        return $form;
    }
}
