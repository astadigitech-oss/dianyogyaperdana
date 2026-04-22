<?php

namespace App\Livewire\Src\Insight;

use App\Models\Gallery;
use App\Models\Insight;
use Livewire\Component;

class Index extends Component
{
    public $insights, $galleries;

    public function mount()
    {
        $this->insights = Insight::with('category')
            ->where('is_active', true)
            ->orderBy('date', 'asc')
            ->take(5)
            ->get()
            ->map(function ($insight) {

                // Bersihkan description + batasi karakter
                $insight->clean_description = \Illuminate\Support\Str::limit(
                    strip_tags(html_entity_decode($insight->description)),
                    100
                );

                // Format tanggal dan hari ke Indonesia
                \Carbon\Carbon::setLocale('id');
                $waktu = \Carbon\Carbon::parse($insight->created_at);

                // Pisah jadi 2 key
                $insight->hari = $waktu->translatedFormat('l');       // Contoh: "Minggu"
                $insight->tanggal = $waktu->translatedFormat('d F Y'); // Contoh: "24 Agustus 2025"

                return $insight;
            });

        $this->galleries = Gallery::where('is_active', true)->orderBy('date', 'desc')->take(4)->get();
    }

    public function render()
    {
        return view('livewire.src.insight.index', [
            'insights' => $this->insights,
            'galleries' => $this->galleries
        ]);
    }
}
