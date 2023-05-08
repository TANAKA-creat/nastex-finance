<?php

namespace App\Admin\Controllers;

use App\Models\TicketFee;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TicketFeeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'TicketFee';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new TicketFee());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('datetime_ticket_fee', __('Datetime ticket fee'))->sortable();
        $grid->column('ticket_fee_creditor', __('Ticket fee creditor'));
        $grid->column('rmb_ticket_fee', __('Rmb ticket fee'))->sortable();
        $grid->column('usd_ticket_fee', __('Usd ticket fee'));
        $grid->column('category_id', __('Category id'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();
        $grid->filter(function($filter) {
            $filter->between('datetime_ticket_fee','記録日')->datetime();
            $filter->like('ticket_fee_creditor');
            $filter->like('rmb_ticket_fee','支払（RMB）');
            $filter->like('usd_ticket_fee','支払（USD）');
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
        $show = new Show(TicketFee::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('datetime_ticket_fee', __('Datetime ticket fee'));
        $show->field('ticket_fee_creditor', __('Ticket fee creditor'));
        $show->field('rmb_ticket_fee', __('Rmb ticket fee'));
        $show->field('usd_ticket_fee', __('Usd ticket fee'));
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
        $form = new Form(new TicketFee());

        $form->date('datetime_ticket_fee', __('Datetime ticket fee'))->default(date('Y-m-d'));
        $form->text('ticket_fee_creditor', __('Ticket fee creditor'));
        $form->decimal('rmb_ticket_fee', __('Rmb ticket fee'));
        $form->decimal('usd_ticket_fee', __('Usd ticket fee'));
        $form->number('category_id', __('Category id'));

        return $form;
    }
}
