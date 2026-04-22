<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Burger extends Component
{
    public bool $burgerActive = false;
    public bool $aboutUs = false;

    public function toggle()
    {
        $this->burgerActive = ! $this->burgerActive;
    }

    public function toggleAboutUs()
    {
        $this->aboutUs = ! $this->aboutUs;
    }

    public function render()
    {
        return view('livewire.components.burger');
    }
}
