<?php

namespace App\Filament\Intern\Resources\DailyTimeRecords\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DailyTimeRecordsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('work_date')
                    ->label('Date')
                    ->date()
                    ->sortable(),
                TextColumn::make('recorded_at')
                    ->label('Time')
                    ->dateTime('h:i A'),
                TextColumn::make('type')
                    ->badge()
                    ->formatStateUsing(fn($state) => $state === 1 ? 'In' : 'Out')
                    ->color(fn($state) => $state === 1 ? 'success' : 'warning')
            ])
            ->filters([
                //
            ])
            ->recordActions([
                // EditAction::make(),
            ])
            ->toolbarActions([
                // BulkActionGroup::make([
                //     DeleteBulkAction::make(),
                // ]),
            ]);
    }
}
