<?php

namespace App\Livewire\Src\AboutUs;

use App\Models\Employee;
use Livewire\Component;

class Index extends Component
{
    public $employees;

    public function mount()
    {
        $this->employees = Employee::where('is_active', true)->orderBy('sort', 'asc')->get();
    }

    public function render()
    {
        return view('livewire.src.about-us.index',[
            'employees' => $this->employees
        ]);
    }
}
