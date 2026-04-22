<?php

namespace App\Livewire\Src\OrganizationalStructure;

use App\Models\Team;
use Livewire\Component;

class Index extends Component
{
    public $team;

    public function mount()
    {
        $this->team = Team::where('is_active', true)->first();
    }
    public function render()
    {
        return view('livewire.src.organizational-structure.index', [
            'team' => $this->team
        ]);
    }
}
