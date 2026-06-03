<?php

namespace App\Filament\Resources\AreaLayanans\Pages;

use App\Filament\Resources\AreaLayanans\AreaLayananResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAreaLayanan extends EditRecord
{
    protected static string $resource = AreaLayananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
