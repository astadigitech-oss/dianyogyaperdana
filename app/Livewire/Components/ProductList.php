<?php

namespace App\Livewire\Components;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Insight;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;

    public $search = '';
    public $category = 'all';
    public $filters;

    public function mount() {}
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function updatingCategory()
    {
        $this->resetPage();
    }

    public function render()
    {
        $this->filters = Category::withCount('insights')->get();

        $query = Insight::with('category')->orderBy('date', 'desc');

        if ($this->search) {
            $query->where('name', 'like', "%{$this->search}%");
        }

        if ($this->category !== 'all') {
            $query->where('category_id', $this->category);
        }

        $insights = $query->paginate(6);

        $insights->getCollection()->transform(function ($insight) {
            $insight->clean_description = \Illuminate\Support\Str::limit(
                strip_tags(html_entity_decode($insight->description)),
                100
            );
            return $insight;
        });

        // hitung ulang filter setiap render
        $filters = Category::withCount('insights')->get();
        $all = Insight::count();
        $recentInsights = Insight::orderBy('date', 'desc')->take(3)->get()->map(function ($insight) {
            // bersihin description + batasi karakter
            $insight->clean_description = \Illuminate\Support\Str::limit(
                strip_tags(html_entity_decode($insight->description)),
                100
            );
            return $insight;
        });

        $recentGalleries = Gallery::orderBy('date', 'desc')->take(4)->get();

        return view('livewire.components.product-list', [
            'insights' => $insights,
            'filters' => $filters,
            'all' => $all,
            'recentInsights' => $recentInsights,
            'recentGalleries' => $recentGalleries
        ]);
    }
}
