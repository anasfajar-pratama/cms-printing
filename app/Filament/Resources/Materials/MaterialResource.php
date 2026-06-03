<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MaterialResource\Pages;
use App\Models\Material;
use BackedEnum;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;

class MaterialResource extends Resource
{
    protected static ?string $model = Material::class;
    protected static ?int $navigationSort = 3;

    public static function getNavigationIcon(): string|Htmlable|BackedEnum|null
    {
        return 'heroicon-o-swatch';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Konten';
    }

    public static function getNavigationLabel(): string
    {
        return 'Material/Bahan';
    }

    public static function getModelLabel(): string
    {
        return 'Material';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Daftar Material';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('nama')
                ->required()
                ->maxLength(255),
            Select::make('kategori')
                ->options([
                    'jersey'  => 'Jersey',
                    'hijab'   => 'Hijab',
                    'sport'   => 'Sport',
                    'jaket'   => 'Jaket',
                    'textile' => 'Textile',
                ])
                ->required(),
            Textarea::make('deskripsi')
                ->rows(3),
            TextInput::make('harga')
                ->numeric()
                ->prefix('Rp')
                ->required(),
            TextInput::make('urutan')
                ->numeric()
                ->default(0),
            Toggle::make('aktif')
                ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('urutan')
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kategori')
                    ->badge(),
                Tables\Columns\TextColumn::make('harga')
                    ->formatStateUsing(fn ($state) => 'Rp ' . number_format($state, 0, ',', '.')),
                Tables\Columns\IconColumn::make('aktif')
                    ->boolean(),
            ])
            ->reorderable('urutan')
            ->defaultSort('urutan');
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListMaterials::route('/'),
            'create' => Pages\CreateMaterial::route('/create'),
            'edit'   => Pages\EditMaterial::route('/{record}/edit'),
        ];
    }
}