<?php

namespace App\Livewire\Components;

use App\Models\Category;
use Livewire\Component;

class SideInsight extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = Category::withCount('insights')->get();
    }

    public function render()
    {
        return view('livewire.components.side-insight', [
            'category' => $this->categories
        ]);
    }
}
