<?php

namespace App\Filament\Resources\Layanans;

use App\Filament\Resources\Layanans\Pages\CreateLayanan;
use App\Filament\Resources\Layanans\Pages\EditLayanan;
use App\Filament\Resources\Layanans\Pages\ListLayanans;
use App\Filament\Resources\Layanans\Schemas\LayananForm;
use App\Filament\Resources\Layanans\Tables\LayanansTable;
use App\Models\Layanan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;

class LayananResource extends Resource
{
    protected static ?string $model = Layanan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama';

    public static function getNavigationIcon(): string|Htmlable|BackedEnum|null
    {
        return 'heroicon-o-wrench-screwdriver';
    }

    public static function getNavigationLabel(): string
    {
        return 'Layanan';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Homepage';
    }

    public static function getNavigationSort(): ?int
    {
        return 2;
    }

    public static function getModelLabel(): string
    {
        return 'Layanan';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Daftar Layanan';
    }

    public static function form(Schema $schema): Schema
    {
        return LayananForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LayanansTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListLayanans::route('/'),
            'create' => CreateLayanan::route('/create'),
            'edit'   => EditLayanan::route('/{record}/edit'),
        ];
    }
}
