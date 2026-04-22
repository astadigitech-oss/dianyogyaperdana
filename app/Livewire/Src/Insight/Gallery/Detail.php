<?php

namespace App\Livewire\Src\Insight\Gallery;

use App\Models\Gallery;
use App\Models\GalleryObject;
use Livewire\Component;

class Detail extends Component
{
    public $gallery, $galleryObjects;

    public function mount($id)
    {
        $this->gallery = Gallery::where('id', $id)->first();
        $this->galleryObjects = GalleryObject::where('gallery_id', $id)->orderBy('sort', 'asc')->get();
    }
    public function render()
    {
        return view('livewire.src.insight.gallery.detail', [
            'gallery' => $this->gallery,
            'galleryObjects' => $this->galleryObjects
        ]);
    }
}
