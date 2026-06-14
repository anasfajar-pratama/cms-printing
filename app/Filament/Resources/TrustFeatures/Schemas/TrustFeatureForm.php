<?php

namespace App\Filament\Resources\TrustFeatures\Schemas;

use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TrustFeatureForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Keunggulan / Trust Feature')
                ->description('Tampil sebagai 4 kotak sertifikasi di bawah hero section')
                ->schema([
                    TextInput::make('judul')
                        ->label('Judul')
                        ->required()
                        ->maxLength(100)
                        ->placeholder('SNI Certified'),
                    TextInput::make('icon_svg')
                        ->label('Kode Ikon (Heroicon)')
                        ->maxLength(100)
                        ->placeholder('heroicon-o-shield-check')
                        ->helperText('Nama icon Heroicon. Contoh: heroicon-o-check-badge, heroicon-o-bolt'),
                    Textarea::make('deskripsi')
                        ->label('Deskripsi Singkat')
                        ->required()
                        ->rows(2)
                        ->maxLength(200)
                        ->placeholder('Produk berstandar nasional & internasional')
                        ->columnSpanFull(),
                    TextInput::make('urutan')
                        ->label('Urutan Tampil')
                        ->numeric()
                        ->default(0),
                    Toggle::make('aktif')
                        ->label('Aktif / Ditampilkan')
                        ->default(true),
                ])->columns(2),
        ]);
    }
}
