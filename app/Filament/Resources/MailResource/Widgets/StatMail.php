<?php

namespace App\Filament\Resources\MailResource\Widgets;

use App\Models\Mail;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatMail extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Mail', Mail::where('is_answered', 1)->count())
                ->description('Answered')
                ->color('success'),
            Stat::make('Total Mail', Mail::where('is_answered', 0)->count())
                ->description('Unanswered')
                ->color('danger'),

        ];
    }
    protected function getColumns(): int
    {
        return 2;
    }
}
