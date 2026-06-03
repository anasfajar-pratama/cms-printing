<?php

namespace App\Filament\Resources\AreaLayanans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AreaLayananForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kota')
                    ->required(),
                TextInput::make('tipe')
                    ->required(),
                TextInput::make('wa_url')
                    ->default(null),
                TextInput::make('urutan')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('aktif')
                    ->required(),
            ]);
    }
}
