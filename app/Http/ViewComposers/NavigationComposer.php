<?php

namespace App\Http\ViewComposers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Illuminate\View\View;

/**
* Navigation view composer
*/
class NavigationComposer
{
    /**
     * Requested path.
     *
     * @var string
     */
    protected $path;

    /**
     * Set up object properties.
     *
     * @return void
     */
    public function __construct()
    {
        $this->path = Request::path();
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $navigation = [
            [
                'url' => '/',
                'title' => 'Snapshot',
                'active' => ($this->path === '/')
            ],
            [
                'url' => '/accounts',
                'title' => 'Accounts',
                'active' => ($this->path === 'accounts')
            ],
            [
                'url' => '/contributions',
                'title' => 'Contributions',
                'active' => ($this->path === 'contributions')
            ],
            [
                'url' => '/companies',
                'title' => 'Companies',
                'active' => ($this->path === 'companies')
            ],
            [
                'url' => '/categories',
                'title' => 'Categories',
                'active' => ($this->path === 'categories')
            ],
        ];

        $view->with(compact('navigation'));
    }
}
