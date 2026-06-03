<?php

namespace App\Filament\Resources\AreaLayanans;

use App\Filament\Resources\AreaLayanans\Pages\CreateAreaLayanan;
use App\Filament\Resources\AreaLayanans\Pages\EditAreaLayanan;
use App\Filament\Resources\AreaLayanans\Pages\ListAreaLayanans;
use App\Filament\Resources\AreaLayanans\Schemas\AreaLayananForm;
use App\Filament\Resources\AreaLayanans\Tables\AreaLayanansTable;
use App\Models\AreaLayanan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AreaLayananResource extends Resource
{
    protected static ?string $model = AreaLayanan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Arealayanan';

    public static function form(Schema $schema): Schema
    {
        return AreaLayananForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AreaLayanansTable::configure($table);
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
            'index' => ListAreaLayanans::route('/'),
            'create' => CreateAreaLayanan::route('/create'),
            'edit' => EditAreaLayanan::route('/{record}/edit'),
        ];
    }
}
