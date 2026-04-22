<?php

namespace App\Livewire\Components;

use App\Models\Gallery;
use Livewire\Component;
use Livewire\WithPagination;

class GalleryList extends Component
{
    use WithPagination;

    public $search = '';

    // reset page kalau search berubah
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $galleries = Gallery::orderBy('date', 'desc')
            ->where('name', 'like', '%' . $this->search . '%')
            ->paginate(6); // misalnya 9 per halaman

        return view('livewire.components.gallery-list', [
            'galleries' => $galleries,
        ]);
    }
}
