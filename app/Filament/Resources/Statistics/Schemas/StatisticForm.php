<?php

namespace App\Filament\Resources\Statistics\Schemas;

use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class StatisticForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Data Statistik')
                ->description('Angka-angka yang tampil di section Tentang Kami')
                ->schema([
                    TextInput::make('nilai')
                        ->label('Nilai / Angka')
                        ->required()
                        ->maxLength(50)
                        ->placeholder('10.000+')
                        ->helperText('Contoh: 500+, 10.000+, 5 Tahun'),
                    TextInput::make('label')
                        ->label('Label / Keterangan')
                        ->required()
                        ->maxLength(100)
                        ->placeholder('Jersey Diproduksi'),
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
