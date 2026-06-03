<?php

namespace App\Filament\Resources\TrustFeatures\Pages;

use App\Filament\Resources\TrustFeatures\TrustFeatureResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTrustFeatures extends ListRecords
{
    protected static string $resource = TrustFeatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
