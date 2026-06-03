<?php

namespace App\Filament\Resources\PriceTiers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PriceTierForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('service')
                    ->required(),
                TextInput::make('min_qty')
                    ->required()
                    ->numeric(),
                TextInput::make('discount_pct')
                    ->required()
                    ->numeric()
                    ->default(0.0),
            ]);
    }
}
