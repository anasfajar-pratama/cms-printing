<?php

namespace App\Filament\Resources\TrustFeatures;

use App\Filament\Resources\TrustFeatures\Pages\CreateTrustFeature;
use App\Filament\Resources\TrustFeatures\Pages\EditTrustFeature;
use App\Filament\Resources\TrustFeatures\Pages\ListTrustFeatures;
use App\Filament\Resources\TrustFeatures\Schemas\TrustFeatureForm;
use App\Filament\Resources\TrustFeatures\Tables\TrustFeaturesTable;
use App\Models\TrustFeature;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TrustFeatureResource extends Resource
{
    protected static ?string $model = TrustFeature::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'TrustFeature';

    public static function form(Schema $schema): Schema
    {
        return TrustFeatureForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TrustFeaturesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTrustFeatures::route('/'),
            'create' => CreateTrustFeature::route('/create'),
            'edit' => EditTrustFeature::route('/{record}/edit'),
        ];
    }
}
