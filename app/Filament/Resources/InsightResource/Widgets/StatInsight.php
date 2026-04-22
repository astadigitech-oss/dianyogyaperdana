<?php

namespace App\Filament\Resources\InsightResource\Widgets;

use App\Models\Insight;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatInsight extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Insights', Insight::count()),
        ];
    }
    protected function getColumns(): int
    {
        return 1;
    }
}
