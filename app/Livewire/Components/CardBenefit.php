<?php

namespace App\Livewire\Components;

use Livewire\Component;

class CardBenefit extends Component
{
    public $label;
    public $description;
    public $src;
    public $active = false; // default tertutup

    public function mount($label=null, $description=null, $src=null)
    {
        $this->label = $label;
        $this->description = $description;
        $this->src = $src;
    }

    public function toggle()
    {
        $this->active = !$this->active;
    }

    public function render()
    {
        return view('livewire.components.card-benefit');
    }
}
