<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;

/**
 * Class Menu
 *
 * @property \App\Menu $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Menu extends Section
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
    protected $title = 'Menu';

    /**
     * @var string
     */
    protected $alias;

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
	    $display = AdminDisplay::datatables()->with('parent')
	                           ->setHtmlAttribute('class', 'table-primary');
	    $display->setColumns(
		    AdminColumn::text('name','Name'),
		    AdminColumn::text('url', 'URL')->setWidth('100px'),
		    AdminColumn::text('weight', 'weight')->setWidth('50px'),
		    AdminColumn::text('parent.name','Parent')->setWidth('100px')
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
			    AdminFormElement::text('name','Name')->required(),
			    AdminFormElement::text('url','URL')->required(),
			    AdminFormElement::number('weight','weight')->required(),
			    AdminFormElement::select('parent_id', 'Parent', \App\Menu::class)->setDisplay('name')->nullable()
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
