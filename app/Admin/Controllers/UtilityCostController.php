<?php

namespace App\Admin\Controllers;

use App\Models\UtilityCost;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UtilityCostController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'UtilityCost';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new UtilityCost());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('datetime_utility_cost', __('Datetime utility cost'))->sortable();
        $grid->column('utility_cost_creditor', __('Utility cost creditor'));
        $grid->column('rmb_utility_cost', __('Rmb utility cost'))->sortable();
        $grid->column('usd_utility_cost', __('Usd utility cost'));
        $grid->column('category_id', __('Category id'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();
        $grid->filter(function($filter) {
            $filter->between('datetime_utility_cost','記録日')->datetime();
            $filter->like('utility_cost_creditor', '支払項目');
            $filter->like('rmb_utility_cost','支払（RMB）');
            $filter->like('usd_utility_cost','支払（USD）');
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
        $show = new Show(UtilityCost::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('datetime_utility_cost', __('Datetime utility cost'));
        $show->field('utility_cost_creditor', __('Utility cost creditor'));
        $show->field('rmb_utility_cost', __('Rmb utility cost'));
        $show->field('usd_utility_cost', __('Usd utility cost'));
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
        $form = new Form(new UtilityCost());

        $form->date('datetime_utility_cost', __('Datetime utility cost'))->default(date('Y-m-d'));
        $form->text('utility_cost_creditor', __('Utility cost creditor'));
        $form->decimal('rmb_utility_cost', __('Rmb utility cost'));
        $form->decimal('usd_utility_cost', __('Usd utility cost'));
        $form->number('category_id', __('Category id'));

        return $form;
    }
}
