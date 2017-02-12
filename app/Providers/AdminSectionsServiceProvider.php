<?php

namespace App\Providers;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        \App\User::class => 'App\Http\Sections\Users',
        \App\Category::class => 'App\Http\Sections\Category',
        \App\Product::class => 'App\Http\Sections\Product',
        \App\Gallery::class => 'App\Http\Sections\Gallery',
        \App\Menu::class => 'App\Http\Sections\Menu',
        \App\News::class => 'App\Http\Sections\News',
        \App\Page::class => 'App\Http\Sections\Page',
        \App\Review::class => 'App\Http\Sections\Review',
        \App\Slider::class => 'App\Http\Sections\Slider',
    ];

    /**
     * Register sections.
     *
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
    	//

        parent::boot($admin);
    }
}
