<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatTeam extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Teams', Employee::where('is_active', true)->count()),
        ];
    }
    protected function getColumns(): int
    {
        return 1;
    }
}
