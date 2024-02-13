<?php

namespace App\Admin\Controllers;

use App\Models\BillInfo;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BillController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'BillInfo';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BillInfo());
        $grid->column('id','ID');
        $grid->column('brand_name','Brand Name');
        $grid->column('brand_logo','Brand logo');
        $grid->column('due','Due');
        $grid->column('status','Status');
        $grid->column('due_info','Due Info');
        $grid->column('brand_id','Brand Id');
        $grid->column('due_date','Due Date');
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
        $show = new Show(BillInfo::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new BillInfo());
        $form->text('brand_name','Brand Name');
        $form->image('brand_logo','Brand logo');
        $form->number('due','Due');
        $form->number('status','Status');
        $form->text('due_info','Due Info');
        $form->number('brand_id','Brand Id');
        $form->date('due_date','Due Date');
        return $form;
    }
}
