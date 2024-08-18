<?php

namespace Jeffreyvr\PaverForLaravel\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class PaverComponent extends Component
{
    /**
     * Create the component instance.
     */
    public function __construct() {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('paver::components.paver');
    }
}
