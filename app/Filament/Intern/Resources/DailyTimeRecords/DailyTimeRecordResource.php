<?php

namespace App\Filament\Intern\Resources\DailyTimeRecords;

use App\Filament\Intern\Resources\DailyTimeRecords\Pages\CreateDailyTimeRecord;
use App\Filament\Intern\Resources\DailyTimeRecords\Pages\EditDailyTimeRecord;
use App\Filament\Intern\Resources\DailyTimeRecords\Pages\ListDailyTimeRecords;
use App\Filament\Intern\Resources\DailyTimeRecords\Schemas\DailyTimeRecordForm;
use App\Filament\Intern\Resources\DailyTimeRecords\Tables\DailyTimeRecordsTable;
use App\Models\DtrLog;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DailyTimeRecordResource extends Resource
{
    protected static ?string $pluralModelLabel = 'Daily Time Record';
    protected static ?string $model = DtrLog::class;
    protected static ?string $navigationLabel = 'Daily Time Record';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Clock;

    public static function form(Schema $schema): Schema
    {
        return DailyTimeRecordForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        $table->emptyStateHeading('No Logs yet');

        return DailyTimeRecordsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDailyTimeRecords::route('/'),
            // 'create' => CreateDailyTimeRecord::route('/create'),
            // 'edit' => EditDailyTimeRecord::route('/{record}/edit'),
        ];
    }
}
