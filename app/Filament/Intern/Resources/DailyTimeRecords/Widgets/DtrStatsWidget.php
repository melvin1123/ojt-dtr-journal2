<?php

namespace App\Filament\Intern\Resources\DailyTimeRecords\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DtrStatsWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Hours', '480')
                ->description('Total Hours rendered')
                ->color('success'),
            Stat::make('Total days', '60')
                ->description('Total duty days'),
            Stat::make('Lates', '1h 15m')
                ->description('Minutes behind schedule')
                ->color('danger'),
        ];
    }
}
