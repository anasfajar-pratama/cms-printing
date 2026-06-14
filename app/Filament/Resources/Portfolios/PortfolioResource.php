<?php

namespace App\Filament\Resources\Portfolios;

use App\Filament\Resources\Portfolios\Pages\CreatePortfolio;
use App\Filament\Resources\Portfolios\Pages\EditPortfolio;
use App\Filament\Resources\Portfolios\Pages\ListPortfolios;
use App\Filament\Resources\Portfolios\Tables\PortfoliosTable;
use App\Models\Portfolio;
use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPhoto;

    protected static ?string $recordTitleAttribute = 'judul';

    public static function getNavigationIcon(): string|Htmlable|BackedEnum|null
    {
        return 'heroicon-o-photo';
    }

    public static function getNavigationLabel(): string
    {
        return 'Portfolio';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Homepage';
    }

    public static function getNavigationSort(): ?int
    {
        return 4;
    }

    public static function getModelLabel(): string
    {
        return 'Portfolio';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Daftar Portfolio';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Informasi Portfolio')->schema([
                TextInput::make('judul')
                    ->label('Judul Portfolio')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Jersey Basket Tim A'),
                Select::make('kategori')
                    ->label('Kategori')
                    ->options([
                        'basket'   => 'Basket',
                        'textile'  => 'Textile',
                        'hijab'    => 'Hijab',
                        'workshop' => 'Workshop',
                        'material' => 'Material',
                        'jersey'   => 'Jersey',
                        'kaos'     => 'Kaos',
                    ])
                    ->required(),
                TextInput::make('urutan')
                    ->label('Urutan')
                    ->numeric()
                    ->default(0),
            ])->columns(3),

            Section::make('Gambar')->schema([
                FileUpload::make('foto')
                    ->label('Foto Portfolio')
                    ->image()
                    ->disk('public')
                    ->directory('portfolio')
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('4:3')
                    ->columnSpanFull(),
                Toggle::make('is_large')
                    ->label('Tampilkan Besar (wide / 2 kolom)'),
                Toggle::make('aktif')
                    ->label('Aktif / Ditampilkan')
                    ->default(true),
            ])->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return PortfoliosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListPortfolios::route('/'),
            'create' => CreatePortfolio::route('/create'),
            'edit'   => EditPortfolio::route('/{record}/edit'),
        ];
    }
}
