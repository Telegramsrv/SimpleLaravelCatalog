<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use App\Product;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;

/**
 * Class Review
 *
 * @property \App\Review $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Review extends Section
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $alias;

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
	    $display = AdminDisplay::datatables()->with('product')
	                       ->setHtmlAttribute('class', 'table-primary');
	    $display->setColumns(
	               AdminColumn::text('user_name','User name'),
	               AdminColumn::text('email','Email'),
	               AdminColumn::text('product.name','Product'),
	               AdminColumn::text('star','Star')->setWidth('10px')
	    );
	    return $display;
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
	    return AdminForm::panel()->addBody(
		    [
			    AdminFormElement::text('user_name','Name')->required(),
			    AdminFormElement::text('email','Email')->required(),
			    AdminFormElement::number('star','Star')->setMin(0)->setMax(10),
			    AdminFormElement::select('product_id', 'Product', Product::class)->setDisplay('name'),
			    AdminFormElement::textarea('text','Text'),

		    ]
	    );
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        // todo: remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // todo: remove if unused
    }
}
