<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Illuminate\Contracts\Support\Htmlable;

class ManageSettings extends Page
{
    protected static ?string $slug = 'settings';

    public static function getNavigationIcon(): string|Htmlable|BackedEnum|null
    {
        return 'heroicon-o-cog-6-tooth';
    }

    public static function getNavigationLabel(): string
    {
        return 'Settings';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Sistem';
    }

    protected string $view = 'filament.pages.manage-settings';

    public array $data = [];

    public function mount(): void
    {
        $keys = [
            'site_name', 'tagline',
            'wa_jersey', 'wa_hijab',
            'email', 'instagram', 'maps_url',
            'meta_title', 'meta_description',
        ];

        foreach ($keys as $key) {
            $this->data[$key] = Setting::get($key, '');
        }
    }

    public function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Identitas Bisnis')->schema([
                TextInput::make('data.site_name')->label('Nama Bisnis'),
                TextInput::make('data.tagline')->label('Tagline'),
            ])->columns(2),

            Section::make('Kontak')->schema([
                TextInput::make('data.wa_jersey')
                    ->label('WhatsApp Jersey & Textile')
                    ->placeholder('6281382805858'),
                TextInput::make('data.wa_hijab')
                    ->label('WhatsApp Hijab Printing')
                    ->placeholder('6282345556927'),
                TextInput::make('data.email')->label('Email'),
                TextInput::make('data.instagram')->label('Username Instagram'),
                TextInput::make('data.maps_url')->label('Link Google Maps'),
            ])->columns(2),

            Section::make('SEO Global')->schema([
                TextInput::make('data.meta_title')->label('Meta Title'),
                Textarea::make('data.meta_description')
                    ->label('Meta Description')
                    ->rows(2),
            ]),
        ]);
    }

    public function save(): void
    {
        foreach ($this->data as $key => $value) {
            Setting::set($key, $value);
        }

        Notification::make()
            ->title('Settings berhasil disimpan!')
            ->success()
            ->send();
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('save')
                ->label('Simpan Settings')
                ->action('save'),
        ];
    }
}
