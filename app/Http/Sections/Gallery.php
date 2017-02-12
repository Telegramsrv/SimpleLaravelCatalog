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
 * Class Gallery
 *
 * @property \App\Gallery $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Gallery extends Section
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
    protected $title = 'Gallery';

    /**
     * @var string
     */
    protected $alias;

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
	    return AdminDisplay::table()->with('product')
	                       ->setHtmlAttribute('class', 'table-primary')
	                       ->setColumns(
		                       AdminColumn::text('product.name','Product'),
		                       AdminColumn::text('weight', 'Weight')->setWidth('30px'),
		                       AdminColumn::image('image', 'image')->setWidth('50px')
	                       )->paginate(20);
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
			    AdminFormElement::number('weight','weight')->required(),
			    AdminFormElement::select('product_id', 'Product', Product::class)->setDisplay('name'),
			    AdminFormElement::textarea('description','Description'),
			    AdminFormElement::image('image','image')->setUploadPath(function(\Illuminate\Http\UploadedFile $file) {
				    return 'upload/gallery/'; // public/files
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
