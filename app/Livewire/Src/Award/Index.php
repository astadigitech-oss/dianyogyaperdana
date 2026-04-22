<?php

namespace App\Livewire\Src\Award;

use App\Models\Certificate;
use Livewire\Component;

class Index extends Component
{
    public$awards;

    public function mount()
    {
        $this->awards = Certificate::where('is_active', true)->where('type', 'award')->get();
        // dd($this->awards);
    }
    public function render()
    {
        return view('livewire.src.award.index', [
            'awards' => $this->awards
        ]);
    }
}
