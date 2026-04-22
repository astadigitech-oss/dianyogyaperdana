<?php

namespace App\Livewire\Src\Service;

use App\Models\Service;
use Livewire\Component;

class Index extends Component
{
    public $services;

    public function mount()
    {
        $this->services = Service::with('serviceObjects')
            ->where('is_active', true)
            ->orderBy('sort', 'asc')
            ->get()
            ->map(function ($service) {
                // bersihin description + batasi karakter
                $service->clean_description = \Illuminate\Support\Str::limit(
                    strip_tags(html_entity_decode($service->description)),
                    100
                );
                return $service;
            });
    }
    public function render()
    {
        return view('livewire.src.service.index', [
            'services' => $this->services
        ]);
    }
}
