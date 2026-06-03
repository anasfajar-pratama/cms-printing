<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required(),
                TextInput::make('jabatan')
                    ->required(),
                TextInput::make('kota')
                    ->required(),
                Textarea::make('isi')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('bintang')
                    ->required()
                    ->numeric()
                    ->default(5),
                Toggle::make('featured')
                    ->required(),
                Toggle::make('aktif')
                    ->required(),
                TextInput::make('urutan')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
