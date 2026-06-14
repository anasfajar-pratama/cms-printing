<?php

namespace App\Filament\Resources\AreaLayanans\Schemas;

use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AreaLayananForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Data Area Layanan')
                ->description('Kota/wilayah yang dilayani untuk jersey maupun hijab printing')
                ->schema([
                    TextInput::make('kota')
                        ->label('Nama Kota / Wilayah')
                        ->required()
                        ->maxLength(100)
                        ->placeholder('Bandung'),
                    Select::make('tipe')
                        ->label('Tipe Layanan')
                        ->options([
                            'jersey' => 'Jersey & Textile',
                            'hijab'  => 'Hijab Printing',
                        ])
                        ->required(),
                    TextInput::make('wa_url')
                        ->label('Link WhatsApp (opsional)')
                        ->maxLength(255)
                        ->placeholder('https://wa.me/628xxx?text=Halo+saya+dari+Bandung')
                        ->helperText('Link WA khusus area ini, kosongkan jika pakai WA global'),
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
