<?php

namespace App\Livewire\Components;

use App\Models\ServiceObject as ModelsServiceObject;
use Livewire\Component;

class ServiceObject extends Component
{
    public $active = false;
    public $label, $content, $src, $id, $serviceObjects, $description;

    public function mount($label = null, $content = null, $src = null, $id = null, $description = null)
    {
        $this->label = $label;
        $this->content = $content;
        $this->src = $src;
        $this->description = $description;

        if ($id != null) {
            $this->id = $id;
            $this->serviceObjects = ModelsServiceObject::where('service_id', $id)->get();
        } else {
            $this->serviceObjects = null;
        }

        // dd($this->serviceObjects);
    }

    public function toggle()
    {
        $this->active = !$this->active;
    }
    public function render()
    {
        return view('livewire.components.service-object', [
            'serviceObjects' => $this->serviceObjects
        ]);
    }
}
