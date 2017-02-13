<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminColumnEditable;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;

/**
 * Class Slider
 *
 * @property \App\Slider $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Slider extends Section
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
    protected $title = 'Slider';

    /**
     * @var string
     */
    protected $alias;

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
	    $display = AdminDisplay::table()
	                           ->setHtmlAttribute('class', 'table-primary');
	    $display->setColumns(
		    AdminColumn::text('url', 'URL')->setWidth('50px'),
		    AdminColumn::text('weight', 'weight')->setWidth('10px'),
		    AdminColumn::image('image', 'image')->setWidth('100px'),
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
		    	AdminFormElement::text('url','URL')->required(),
			    AdminFormElement::number('weight','weight')->required(),
			    AdminFormElement::checkbox('available','Available'),
			    AdminFormElement::image('image','image')
				    ->setUploadPath(function(\Illuminate\Http\UploadedFile $file) {
				        return 'upload/sliders'; // public/files
			    })
				    ->setUploadSettings([
                        'resize' => [1280, null, function ($constraint) {
	                        $constraint->upsize();
	                        $constraint->aspectRatio();
                        }]
                    ]
				    )
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
