<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LegalityList extends Component
{
    public $number, $color, $textColor;
    /**
     * Create a new component instance.
     */
    public function __construct($number = null, $color = null, $textColor = null)
    {
        $this->number = $number;
        $this->color = $color;
        $this->textColor = $textColor;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.legality-list');
    }
}
