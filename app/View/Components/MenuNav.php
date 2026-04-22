<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuNav extends Component
{
    public $href, $label;
    /**
     * Create a new component instance.
     */
    public function __construct($href = null, $label = null)
    {
        $this->href = $href;
        $this->label = $label;  
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu-nav');
    }
}
