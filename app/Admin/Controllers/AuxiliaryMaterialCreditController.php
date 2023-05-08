<?php

namespace App\Admin\Controllers;

use App\Models\AuxiliaryMaterialCredit;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AuxiliaryMaterialCreditController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'AuxiliaryMaterialCredit';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new AuxiliaryMaterialCredit());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('datetime_auxiliary_material_credit', __('Datetime auxiliary material credit'))->sortable();
        $grid->column('auxiliary_material_credit_creditor', __('Auxiliary material credit creditor'));
        $grid->column('rmb_auxiliary_material_credit', __('Rmb auxiliary material credit'))->sortable();
        $grid->column('usd_auxiliary_material_credit', __('Usd auxiliary material credit'));
        $grid->column('category_id', __('Category id'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();
        $grid->filter(function($filter) {
            $filter->between('datetime_auxiliary_material_credit', '記録日')->datetime();
            $filter->like('auxiliary_material_credit_creditor', '支払項目');
            $filter->like('rmb_auxiliary_material_credit', '支払（RMB）');
            $filter->like('usd_auxiliary_material_credit', '支払（USD）');
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
        $show = new Show(AuxiliaryMaterialCredit::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('datetime_auxiliary_material_credit', __('Datetime auxiliary material credit'));
        $show->field('auxiliary_material_credit_creditor', __('Auxiliary material credit creditor'));
        $show->field('rmb_auxiliary_material_credit', __('Rmb auxiliary material credit'));
        $show->field('usd_auxiliary_material_credit', __('Usd auxiliary material credit'));
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
        $form = new Form(new AuxiliaryMaterialCredit());

        $form->date('datetime_auxiliary_material_credit', __('Datetime auxiliary material credit'))->default(date('Y-m-d'));
        $form->text('auxiliary_material_credit_creditor', __('Auxiliary material credit creditor'));
        $form->decimal('rmb_auxiliary_material_credit', __('Rmb auxiliary material credit'));
        $form->decimal('usd_auxiliary_material_credit', __('Usd auxiliary material credit'));
        $form->number('category_id', __('Category id'));

        return $form;
    }
}
