<?php

namespace App\Livewire\Src\Legality;

use App\Models\Certificate;
use Livewire\Component;

class Index extends Component
{
    public $legalities;

    public function mount()
    {
        $this->legalities = Certificate::where('is_active', true)->where('type', 'legality')->get();
    }
    public function render()
    {
        return view('livewire.src.legality.index', [
            'legalities' => $this->legalities
        ]);
    }
}
