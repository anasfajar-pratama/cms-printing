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
use Illuminate\Contracts\Support\Htmlable;

class AreaLayananResource extends Resource
{
    protected static ?string $model = AreaLayanan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedMapPin;

    protected static ?string $recordTitleAttribute = 'kota';

    public static function getNavigationIcon(): string|Htmlable|BackedEnum|null
    {
        return 'heroicon-o-map-pin';
    }

    public static function getNavigationLabel(): string
    {
        return 'Area Layanan';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Homepage';
    }

    public static function getNavigationSort(): ?int
    {
        return 8;
    }

    public static function getModelLabel(): string
    {
        return 'Area Layanan';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Daftar Area Layanan';
    }

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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListAreaLayanans::route('/'),
            'create' => CreateAreaLayanan::route('/create'),
            'edit'   => EditAreaLayanan::route('/{record}/edit'),
        ];
    }
}
