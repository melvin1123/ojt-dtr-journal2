<?php

namespace App\Filament\Admin\Resources\DtrLogs\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DtrLogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                TextInput::make('type')
                    ->required()
                    ->numeric(),
                DateTimePicker::make('recorded_at')
                    ->required(),
                DatePicker::make('work_date')
                    ->required(),
                TextInput::make('shift_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('work_minutes')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('late_minutes')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
