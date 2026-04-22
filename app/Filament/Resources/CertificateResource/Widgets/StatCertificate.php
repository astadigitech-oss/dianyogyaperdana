<?php

namespace App\Filament\Resources\CertificateResource\Widgets;

use App\Models\Certificate;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatCertificate extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Awards', Certificate::where('type', 'award')->count()),
            Stat::make('Total Legality', Certificate::where('type', 'legality')->count()),
        ];
    }
    protected function getColumns(): int
    {
        return 2;
    }
}
