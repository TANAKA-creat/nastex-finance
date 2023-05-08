<?php

namespace App\Admin\Controllers;

use App\Models\OtherDeposit;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OtherDepositController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'OtherDeposit';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new OtherDeposit());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('datetime_other_deposit', __('Datetime other deposit'))->sortable();
        $grid->column('other_deposit_customer', __('Other deposit customer'));
        $grid->column('rmb_other_deposit', __('Rmb other deposit'))->sortable();
        $grid->column('usd_other_deposit', __('Usd other deposit'));
        $grid->column('category_id', __('Category id'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();
        $grid->filter(function($filter) {
            $filter->between('datetime_other_deposit', '記録日')->datetime();
            $filter->like('other_deposit_customer');
            $filter->like('rmb_other_deposit', '入金（RMB）');
            $filter->like('usd_other_deposit', '入金（USD）');
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
        $show = new Show(OtherDeposit::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('datetime_other_deposit', __('Datetime other deposit'));
        $show->field('other_deposit_customer', __('Other deposit customer'));
        $show->field('rmb_other_deposit', __('Rmb other deposit'));
        $show->field('usd_other_deposit', __('Usd other deposit'));
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
        $form = new Form(new OtherDeposit());

        $form->date('datetime_other_deposit', __('Datetime other deposit'))->default(date('Y-m-d'));
        $form->text('other_deposit_customer', __('Other deposit customer'));
        $form->decimal('rmb_other_deposit', __('Rmb other deposit'));
        $form->decimal('usd_other_deposit', __('Usd other deposit'));
        $form->number('category_id', __('Category id'));

        return $form;
    }
}
