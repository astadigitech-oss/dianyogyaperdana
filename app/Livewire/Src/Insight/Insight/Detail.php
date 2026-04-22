<?php

namespace App\Livewire\Src\Insight\Insight;

use App\Models\Insight;
use Livewire\Component;

class Detail extends Component
{   
    public $insight;

    public function mount($id)
    {
        $this->insight = Insight::where('id', $id)->with('category')->first();
    }
    public function render()
    {
        return view('livewire.src.insight.insight.detail', [
            'insight' => $this->insight
        ]);
    }
}
