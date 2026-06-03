<?php

namespace App\Filament\Resources\TrustFeatures\Pages;

use App\Filament\Resources\TrustFeatures\TrustFeatureResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTrustFeature extends EditRecord
{
    protected static string $resource = TrustFeatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
