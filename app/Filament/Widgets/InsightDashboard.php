<?php

namespace App\Filament\Widgets;

use App\Models\Insight;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class InsightDashboard extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Insight', Insight::count())
                ->description('Last Upload Insight ' . Insight::orderBy('created_at', 'desc')->first()->date),
        ];
    }

    protected function getColumns(): int
    {
        return 1;
    }
}
