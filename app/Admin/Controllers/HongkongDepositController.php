<?php

namespace App\Admin\Controllers;

use App\Models\HongkongDeposit;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HongkongDepositController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'HongkongDeposit';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new HongkongDeposit());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('datetime_hongkong_deposit', __('Datetime hongkong deposit'))->sortable();
        $grid->column('hongkong_deposit_customer', __('Hongkong deposit customer'));
        $grid->column('rmb_hongkong_deposit', __('Rmb hongkong deposit'))->sortable();
        $grid->column('usd_hongkong_deposit', __('Usd hongkong deposit'));
        $grid->column('category_id', __('Category id'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();
        $grid->filter(function($filter) {
            $filter->between('datetime_hongkong_deposit', '記録日')->datetime();
            $filter->like('hongkong_deposit_customer', '顧客名');
            $filter->like('rmb_hongkong_deposit', '入金（RMB）');
            $filter->like('usd_hongkong_deposit', '入金（USD）');
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
        $show = new Show(HongkongDeposit::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('datetime_hongkong_deposit', __('Datetime hongkong deposit'));
        $show->field('hongkong_deposit_customer', __('Hongkong deposit customer'));
        $show->field('rmb_hongkong_deposit', __('Rmb hongkong deposit'));
        $show->field('usd_hongkong_deposit', __('Usd hongkong deposit'));
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
        $form = new Form(new HongkongDeposit());

        $form->date('datetime_hongkong_deposit', __('Datetime hongkong deposit'))->default(date('Y-m-d'));
        $form->text('hongkong_deposit_customer', __('Hongkong deposit customer'));
        $form->decimal('rmb_hongkong_deposit', __('Rmb hongkong deposit'));
        $form->decimal('usd_hongkong_deposit', __('Usd hongkong deposit'));
        $form->number('category_id', __('Category id'));

        return $form;
    }
}
