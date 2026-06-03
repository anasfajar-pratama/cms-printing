<?php

namespace App\Filament\Resources\AreaLayanans\Pages;

use App\Filament\Resources\AreaLayanans\AreaLayananResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAreaLayanans extends ListRecords
{
    protected static string $resource = AreaLayananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
