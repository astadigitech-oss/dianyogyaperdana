<?php

namespace App\Livewire\Components;

use App\Models\GalleryObject as ModelsGalleryObject;
use Livewire\Component;

class GalleryObject extends Component
{
    public $id, $src, $active=false, $galleryObject;

    public function toggle()
    {
        $this->active = !$this->active;
    }

    public function mount($src = null, $id = null, $galleryObject=null)
    {
        $this->src = $src;
        $this->galleryObject = ModelsGalleryObject::where('id', $id)->first();
    }

    public function render()
    {
        return view('livewire.components.gallery-object', [
            'src' => $this->src,
            'galleryObject' => $this->galleryObject
        ]);
    }
}
