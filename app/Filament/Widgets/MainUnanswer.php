<?php

namespace App\Filament\Widgets;

use App\Models\Client;
use App\Models\Insight;
use App\Models\Mail;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class MainUnanswer extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Mail', Mail::where('is_answered', 0)->count())
                ->description('Unanswered')
                ->color('danger'),
            Stat::make('Total Client', Client::count()),
        ];
    }

    protected function getColumns(): int
    {
        return 2;
    }
}
