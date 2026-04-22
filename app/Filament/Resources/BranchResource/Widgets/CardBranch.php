<?php

namespace App\Filament\Resources\BranchResource\Widgets;

use App\Models\Branch;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CardBranch extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Branches', Branch::count()),
        ];
    }
    protected function getColumns(): int
    {
        return 1;
    }
}
