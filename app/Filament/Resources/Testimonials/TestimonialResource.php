<?php

namespace App\Filament\Resources\Testimonials;

use App\Filament\Resources\Testimonials\Pages\CreateTestimonial;
use App\Filament\Resources\Testimonials\Pages\EditTestimonial;
use App\Filament\Resources\Testimonials\Pages\ListTestimonials;
use App\Filament\Resources\Testimonials\Tables\TestimonialsTable;
use App\Models\Testimonial;
use BackedEnum;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChatBubbleLeftRight;

    protected static ?string $recordTitleAttribute = 'nama';

    public static function getNavigationIcon(): string|Htmlable|BackedEnum|null
    {
        return 'heroicon-o-chat-bubble-left-right';
    }

    public static function getNavigationLabel(): string
    {
        return 'Testimoni';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Homepage';
    }

    public static function getNavigationSort(): ?int
    {
        return 5;
    }

    public static function getModelLabel(): string
    {
        return 'Testimoni';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Daftar Testimoni';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Identitas Pelanggan')->schema([
                TextInput::make('nama')
                    ->label('Nama Pelanggan')
                    ->required()
                    ->maxLength(255),
                TextInput::make('jabatan')
                    ->label('Jabatan / Profesi')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Manajer Tim Basket'),
                TextInput::make('kota')
                    ->label('Kota')
                    ->required()
                    ->maxLength(100)
                    ->placeholder('Bandung'),
            ])->columns(3),

            Section::make('Isi Testimoni')->schema([
                Textarea::make('isi')
                    ->label('Isi Testimoni')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull(),
                Select::make('bintang')
                    ->label('Rating Bintang')
                    ->options([
                        5 => '★★★★★ (5 Bintang)',
                        4 => '★★★★☆ (4 Bintang)',
                        3 => '★★★☆☆ (3 Bintang)',
                    ])
                    ->default(5)
                    ->required(),
            ])->columns(1),

            Section::make('Pengaturan')->schema([
                Toggle::make('featured')
                    ->label('Featured (tampil utama)')
                    ->default(false),
                Toggle::make('aktif')
                    ->label('Aktif / Ditampilkan')
                    ->default(true),
                TextInput::make('urutan')
                    ->label('Urutan')
                    ->numeric()
                    ->default(0),
            ])->columns(3),
        ]);
    }

    public static function table(Table $table): Table
    {
        return TestimonialsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListTestimonials::route('/'),
            'create' => CreateTestimonial::route('/create'),
            'edit'   => EditTestimonial::route('/{record}/edit'),
        ];
    }
}
