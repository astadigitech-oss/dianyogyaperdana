<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InsightCard extends Component
{
    public $label, $src, $date, $category, $id, $tanggal, $hari;
    /**
     * Create a new component instance.
     */
    public function __construct($label = null, $src = null, $date = null, $category = null, $id = null, $tanggal = null, $hari = null)
    {
        $this->label = $label;
        $this->src = $src;
        $this->date = $date;
        $this->category = $category;
        $this->id = $id;
        $this->tanggal = $tanggal;
        $this->hari = $hari;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.insight-card');
    }
}
