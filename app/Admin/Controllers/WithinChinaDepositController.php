<?php

namespace App\Admin\Controllers;

use App\Models\WithinChinaDeposit;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class WithinChinaDepositController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'WithinChinaDeposit';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new WithinChinaDeposit());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('datetime_within_china_deposit', __('Datetime within china deposit'))->sortable();
        $grid->column('within_china_deposit_customer', __('Within china deposit customer'));
        $grid->column('rmb_within_china_deposit', __('Rmb within china deposit'))->sortable();
        $grid->column('usd_within_china_deposit', __('Usd within china deposit'));
        $grid->column('category_id', __('Category id'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();
        $grid->filter(function($filter) {
            $filter->between('datetime_within_china_deposit', '記録日')->datetime();
            $filter->like('within_china_deposit_customer','顧客名');
            $filter->like('rmb_within_china_deposit', '入金（RMB）');
            $filter->like('usd_within_china_deposit', '入金（USD）');
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
        $show = new Show(WithinChinaDeposit::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('datetime_within_china_deposit', __('Datetime within china deposit'));
        $show->field('within_china_deposit_customer', __('Within china deposit customer'));
        $show->field('rmb_within_china_deposit', __('Rmb within china deposit'));
        $show->field('usd_within_china_deposit', __('Usd within china deposit'));
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
        $form = new Form(new WithinChinaDeposit());

        $form->date('datetime_within_china_deposit', __('Datetime within china deposit'))->default(date('Y-m-d'));
        $form->text('within_china_deposit_customer', __('Within china deposit customer'));
        $form->decimal('rmb_within_china_deposit', __('Rmb within china deposit'));
        $form->decimal('usd_within_china_deposit', __('Usd within china deposit'));
        $form->number('category_id', __('Category id'));

        return $form;
    }
}
