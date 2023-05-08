<?php

namespace App\Admin\Controllers;

use App\Models\MaterialCredit;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MaterialCreditController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'MaterialCredit';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new MaterialCredit());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('datetime_material_credit', __('Datetime material credit'))->sortable();
        $grid->column('material_creditor', __('Material creditor'));
        $grid->column('rmb_material_credit', __('Rmb material credit'))->sortable();
        $grid->column('usd_material_credit', __('Usd material credit'));
        $grid->column('category_id', __('Category id'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();
        $grid->filter(function($filter) {
            $filter->between('datetime_material_credit','記録日')->datetime();
            $filter->like('material_creditor','支払項目');
            $filter->like('rmb_material_credit','支払（RMB）');
            $filter->like('usd_material_credit','支払（USD）');
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
        $show = new Show(MaterialCredit::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('datetime_material_credit', __('Datetime material credit'));
        $show->field('material_creditor', __('Material creditor'));
        $show->field('rmb_material_credit', __('Rmb material credit'));
        $show->field('usd_material_credit', __('Usd material credit'));
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
        $form = new Form(new MaterialCredit());

        $form->date('datetime_material_credit', __('Datetime material credit'))->default(date('Y-m-d'));
        $form->text('material_creditor', __('Material creditor'));
        $form->decimal('rmb_material_credit', __('Rmb material credit'));
        $form->decimal('usd_material_credit', __('Usd material credit'));
        $form->number('category_id', __('Category id'));

        return $form;
    }
}
