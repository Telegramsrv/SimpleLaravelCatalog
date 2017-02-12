<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminColumnEditable;
use App\Category;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;

/**
 * Class Product
 *
 * @property \App\Product $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Product extends Section
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
    protected $title = 'Products';

    /**
     * @var string
     */
    protected $alias;

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
    	$display = AdminDisplay::datatables()->with('category')
	                           ->setHtmlAttribute('class', 'table-primary');
    	$display->setColumns(
	               AdminColumn::text('name', 'Name'),
	               AdminColumn::text('slug', 'Slug')->setWidth('250px'),
	               AdminColumn::text('category.name','Category'),
	               AdminColumn::text('weight', 'Weight')->setWidth('30px'),
	               AdminColumn::image('image', 'image')->setWidth('50px'),
	               AdminColumnEditable::checkbox('available','Available')->setWidth('50px')
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
			    AdminFormElement::text('name', 'Name')->required(),
			    AdminFormElement::text('slug', 'Slug')->required(),
			    AdminFormElement::number('weight','weight')->required(),
			    AdminFormElement::checkbox('available','Available'),
			    AdminFormElement::select('category_id', 'Category', Category::class)->setDisplay('name'),
			    AdminFormElement::textarea('description','Description'),
			    AdminFormElement::image('image','image')->setUploadPath(function(\Illuminate\Http\UploadedFile $file) {
				    return 'upload/products/'; // public/files
			    })
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
