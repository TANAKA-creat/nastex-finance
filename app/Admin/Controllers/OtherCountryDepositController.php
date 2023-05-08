<?php

namespace App\Admin\Controllers;

use App\Models\OtherCountryDeposit;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OtherCountryDepositController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'OtherCountryDeposit';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new OtherCountryDeposit());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('datetime_other_country_deposit', __('Datetime other country deposit'))->sortable();
        $grid->column('other_country_deposit_customer', __('Other country deposit customer'));
        $grid->column('rmb_other_country_deposit', __('Rmb other country deposit'))->sortable();
        $grid->column('usd_other_country_deposit', __('Usd other country deposit'));
        $grid->column('category_id', __('Category id'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();
        $grid->filter(function($filter) {
            $filter->between('datetime_other_country_deposit', '記録日')->datetime();
            $filter->like('other_country_deposit_customer', '顧客名');
            $filter->like('rmb_other_country_deposit', '入金（RMB）');
            $filter->like('usd_other_country_deposit', '入金（USD）');
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
        $show = new Show(OtherCountryDeposit::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('datetime_other_country_deposit', __('Datetime other country deposit'));
        $show->field('other_country_deposit_customer', __('Other country deposit customer'));
        $show->field('rmb_other_country_deposit', __('Rmb other country deposit'));
        $show->field('usd_other_country_deposit', __('Usd other country deposit'));
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
        $form = new Form(new OtherCountryDeposit());

        $form->date('datetime_other_country_deposit', __('Datetime other country deposit'))->default(date('Y-m-d'));
        $form->text('other_country_deposit_customer', __('Other country deposit customer'));
        $form->decimal('rmb_other_country_deposit', __('Rmb other country deposit'));
        $form->decimal('usd_other_country_deposit', __('Usd other country deposit'));
        $form->number('category_id', __('Category id'));

        return $form;
    }
}
