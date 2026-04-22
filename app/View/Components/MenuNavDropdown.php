<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuNavDropdown extends Component
{
    public $svg, $label;
    /**
     * Create a new component instance.
     */
    public function __construct($svg = null, $label = null)
    {
        $this->svg = $svg;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu-nav-dropdown');
    }
}
