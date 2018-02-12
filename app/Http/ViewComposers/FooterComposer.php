<?php

namespace App\Http\ViewComposers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Illuminate\View\View;

/**
* Footer view composer
*/
class FooterComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        // Copyright string
        $copyright_start = config('site.copyright_start');
        $copyright_end   = config('site.copyright_end');
        $copyright       = '&copy; ' . $copyright_start;
        if ($copyright_end != $copyright_start) {
            $copyright .= '-' . $copyright_end;
        }
        $copyright .= ' ' . config('site.author');

        $view->with(compact('copyright'));
    }
}
