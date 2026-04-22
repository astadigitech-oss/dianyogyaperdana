<?php

namespace App\Filament\Resources\CertificateResource\Pages;

use App\Filament\Resources\CertificateResource;
use App\Filament\Resources\CertificateResource\Widgets\StatCertificate;
use App\Models\Certificate;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListCertificates extends ListRecords
{
    protected static string $resource = CertificateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'Award' => Tab::make()
                ->modifyQueryUsing(fn(Builder $query) => $query->where('type', 'award')),
            'Legality' => Tab::make()
                ->modifyQueryUsing(fn(Builder $query) => $query->where('type', 'legality')),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return [
            StatCertificate::class,
        ];
    }
}
