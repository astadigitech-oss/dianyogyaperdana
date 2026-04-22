<?php

namespace App\Livewire\Src\Home;

use App\Models\Branch;
use App\Models\Client;
use App\Models\Gallery;
use App\Models\Insight;
use Livewire\Component;

class Index extends Component
{
    public $branches, $clients, $testimonials, $insights;

    public function mount()
    {
        $this->branches = Branch::where('is_active', true)->get();
        $this->clients = Client::where('is_active', true)->select('id', 'name', 'image')->get();
        $this->testimonials = Client::where('is_active', true)->where('testimoni_show', true)->select('id', 'name', 'testimoni', 'star', 'image', 'image_office')->get();

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

        // dd($this->insights);
    }
    public function render()
    {
        return view('livewire.src.home.index', [
            'branchs' => $this->branches,
            'clients' => $this->clients,
            'testimonials' => $this->testimonials,
            'insights' => $this->insights,
        ]);
    }
}
