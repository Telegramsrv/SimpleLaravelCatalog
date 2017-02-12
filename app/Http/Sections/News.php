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
 * Class News
 *
 * @property \App\News $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class News extends Section
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
    protected $title = 'News';

    /**
     * @var string
     */
    protected $alias;

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
	    $display = AdminDisplay::datatables()
	                           ->setHtmlAttribute('class', 'table-primary');
	    $display->setColumns(
		    AdminColumn::text('title', 'Title'),
		    AdminColumn::text('slug', 'Slug')->setWidth('250px'),
		    AdminColumn::text('created_at','Created at')->setWidth('200px'),
		    AdminColumn::text('updated_at','Updated at')->setWidth('200px')
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
			    AdminFormElement::text('title', 'Title')->required(),
			    AdminFormElement::text('slug', 'Slug')->required(),
			    AdminFormElement::datetime('created_at', 'Created at'),
			    AdminFormElement::datetime('updated_at', 'Updated at'),
			    AdminFormElement::textarea('body','Body')
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
