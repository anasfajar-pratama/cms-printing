<?php

namespace App\Filament\Resources\Layanans\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class LayananForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Informasi Layanan')->schema([
                TextInput::make('nama')
                    ->label('Nama Layanan')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Jersey Custom Tim'),
                TextInput::make('tag')
                    ->label('Tag / Badge')
                    ->maxLength(100)
                    ->placeholder('Terlaris · MOQ 10 pcs')
                    ->helperText('Teks kecil di bawah nama layanan'),
                Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->rows(4)
                    ->columnSpanFull(),
            ])->columns(2),

            Section::make('Gambar & Tampilan')->schema([
                FileUpload::make('foto')
                    ->label('Foto Layanan')
                    ->image()
                    ->disk('public')
                    ->directory('layanan')
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('16:9')
                    ->columnSpanFull(),
                Toggle::make('is_wide')
                    ->label('Tampilkan Lebar (wide card)')
                    ->helperText('Card akan mengambil 2 kolom pada grid'),
                Toggle::make('aktif')
                    ->label('Aktif / Ditampilkan')
                    ->default(true),
                TextInput::make('urutan')
                    ->label('Urutan Tampil')
                    ->numeric()
                    ->default(0),
            ])->columns(3),

            Section::make('Checklist Fitur')
                ->description('Daftar poin keunggulan layanan ini')
                ->schema([
                    Repeater::make('checklist')
                        ->label('')
                        ->schema([
                            TextInput::make('item')
                                ->label('Poin')
                                ->placeholder('MOQ rendah mulai 10 pcs')
                                ->required(),
                        ])
                        ->addActionLabel('+ Tambah Poin')
                        ->reorderable()
                        ->columnSpanFull(),
                ]),
        ]);
    }
}
