<?php

namespace App\Filament\Intern\Resources\DailyTimeRecords\Pages;

use App\Filament\Intern\Resources\DailyTimeRecords\DailyTimeRecordResource;
use App\Filament\Intern\Resources\DailyTimeRecords\Widgets\DtrStatsWidget;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use App\Models\DtrLog;
use Filament\Actions\Action;
use Illuminate\Support\Facades\Auth;

use function Symfony\Component\Clock\now;

class ListDailyTimeRecords extends ListRecords
{
    protected static string $resource = DailyTimeRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // For time in
            Action::make('time_in')
                ->Label('Time In')
                ->color('success')
                ->requiresConfirmation()
                ->action(function () {
                    DtrLog::create([
                        'user_id' => Auth::id(),
                        'type' => 1,
                        'recorded_at' => now(),
                        'work_date' => now()->format('Y-m-d'),
                    ]);
                })
                ->successNotificationTitle('Clocked in successfully'),

            //For time out
            Action::make('time_out')
                ->Label('Time Out')
                ->color('info')
                ->requiresConfirmation()
                ->action(function () {
                    DtrLog::create([
                        'user_id' => Auth::id(),
                        'type' => 2,
                        'recorded_at' => today(),
                        'work_date' => now()->format('Y-m-d'),
                    ]);
                })
                ->successNotificationTitle('Clocked out successfully'),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            DtrStatsWidget::class
        ];
    }
}
