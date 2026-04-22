<?php

use App\Livewire\Src\AboutUs\Index as AboutUsIndex;
use App\Livewire\Src\Award\Index as AwardIndex;
use App\Livewire\Src\CompanyProfile\Index as CompanyProfileIndex;
use App\Livewire\Src\Contact\Index as ContactIndex;
use App\Livewire\Src\Home\Index;
use App\Livewire\Src\Insight\Gallery\Detail as GalleryDetail;
use App\Livewire\Src\Insight\Gallery\Index as GalleryIndex;
use App\Livewire\Src\Insight\Index as InsightIndex;
use App\Livewire\Src\Insight\Insight\Detail;
use App\Livewire\Src\Insight\Insight\Index as InsightInsightIndex;
use App\Livewire\Src\Legality\Index as LegalityIndex;
use App\Livewire\Src\OrganizationalStructure\Index as OrganizationalStructureIndex;
use App\Livewire\Src\Service\Index as ServiceIndex;

use Illuminate\Support\Facades\Route;

Route::get('/', Index::class)->name('home');
Route::get('/about-us', AboutUsIndex::class)->name('about-us');
Route::get('/company-profile', CompanyProfileIndex::class)->name('company-profile');
// Route::get('/organizational-structure', OrganizationalStructureIndex::class)->name('organizational-structure');
Route::get('/legality', LegalityIndex::class)->name('legality');
Route::get('/award-certified', AwardIndex::class)->name('award-certified');
Route::get('/services', ServiceIndex::class)->name('services');
Route::get('/insights', InsightIndex::class)->name('insights');
Route::get('/insights/insight', InsightInsightIndex::class)->name('insight');
Route::get('/insights/insight/{id}', Detail::class)->name('detail-insight');
Route::get('/insights/gallery', GalleryIndex::class)->name('gallery');
Route::get('/insights/gallery/{id}', GalleryDetail::class)->name('detail-gallery');
Route::get('/contacts', ContactIndex::class)->name('contacts');
