<?php

namespace App\Filament\Pages;

use App\Models\HeroSetting;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Illuminate\Contracts\Support\Htmlable;

class ManageHero extends Page
{
    protected static ?string $slug = 'manage-hero';

    public static function getNavigationIcon(): string|Htmlable|BackedEnum|null
    {
        return 'heroicon-o-home';
    }

    public static function getNavigationLabel(): string
    {
        return 'Hero Section';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Homepage';
    }

    public static function getNavigationSort(): ?int
    {
        return 1;
    }

    protected string $view = 'filament.pages.manage-hero';

    public array $data = [];

    public function mount(): void
    {
        $hero = HeroSetting::first();

        $this->data = [
            'eyebrow'    => $hero?->eyebrow    ?? 'Sejak 2017 · Produsen Resmi · Indonesia',
            'title_line1'=> $hero?->title_line1 ?? 'Produsen Jersey Custom',
            'title_line2'=> $hero?->title_line2 ?? 'Textile Printing',
            'title_line3'=> $hero?->title_line3 ?? 'Berkualitas.',
            'description'=> $hero?->description ?? 'Melayani produksi jersey custom, kaos printing, hijab, dan textile printing untuk kebutuhan tim, organisasi, komunitas, hingga brand fashion.',
            'btn1_label' => $hero?->btn1_label  ?? 'Konsultasi Sekarang',
            'btn1_url'   => $hero?->btn1_url    ?? '#',
            'btn2_label' => $hero?->btn2_label  ?? 'Request Penawaran',
            'btn2_url'   => $hero?->btn2_url    ?? '#',
            'btn3_label' => $hero?->btn3_label  ?? 'Lihat Portfolio',
            'btn3_url'   => $hero?->btn3_url    ?? '#portfolio',
        ];
    }

    public function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Teks Hero')
                ->description('Teks utama yang tampil di bagian atas halaman')
                ->schema([
                    TextInput::make('data.eyebrow')
                        ->label('Eyebrow Text')
                        ->placeholder('Sejak 2017 · Produsen Resmi · Indonesia')
                        ->helperText('Teks kecil di atas judul utama'),
                    Textarea::make('data.description')
                        ->label('Deskripsi')
                        ->rows(3)
                        ->columnSpanFull(),
                ])->columns(1),

            Section::make('Judul Hero')
                ->description('Judul besar dipisah 3 baris (baris ke-2 berwarna oranye)')
                ->schema([
                    TextInput::make('data.title_line1')
                        ->label('Baris 1')
                        ->placeholder('Produsen Jersey Custom'),
                    TextInput::make('data.title_line2')
                        ->label('Baris 2 (warna oranye / accent)')
                        ->placeholder('Textile Printing'),
                    TextInput::make('data.title_line3')
                        ->label('Baris 3')
                        ->placeholder('Berkualitas.'),
                ])->columns(1),

            Section::make('Tombol CTA')
                ->description('Tombol-tombol aksi di hero section')
                ->schema([
                    TextInput::make('data.btn1_label')
                        ->label('Tombol 1 - Label')
                        ->placeholder('Konsultasi Sekarang'),
                    TextInput::make('data.btn1_url')
                        ->label('Tombol 1 - URL')
                        ->placeholder('#')
                        ->helperText('Gunakan link WA: https://wa.me/628xxx'),
                    TextInput::make('data.btn2_label')
                        ->label('Tombol 2 - Label')
                        ->placeholder('Request Penawaran'),
                    TextInput::make('data.btn2_url')
                        ->label('Tombol 2 - URL')
                        ->placeholder('#'),
                    TextInput::make('data.btn3_label')
                        ->label('Tombol 3 - Label')
                        ->placeholder('Lihat Portfolio'),
                    TextInput::make('data.btn3_url')
                        ->label('Tombol 3 - URL')
                        ->placeholder('#portfolio'),
                ])->columns(2),
        ]);
    }

    public function save(): void
    {
        $hero = HeroSetting::firstOrNew([]);

        $hero->fill([
            'eyebrow'    => $this->data['eyebrow'],
            'title_line1'=> $this->data['title_line1'],
            'title_line2'=> $this->data['title_line2'],
            'title_line3'=> $this->data['title_line3'],
            'description'=> $this->data['description'],
            'btn1_label' => $this->data['btn1_label'],
            'btn1_url'   => $this->data['btn1_url'],
            'btn2_label' => $this->data['btn2_label'],
            'btn2_url'   => $this->data['btn2_url'],
            'btn3_label' => $this->data['btn3_label'],
            'btn3_url'   => $this->data['btn3_url'],
        ])->save();

        Notification::make()
            ->title('Hero section berhasil disimpan!')
            ->success()
            ->send();
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('save')
                ->label('Simpan Hero')
                ->icon('heroicon-o-check')
                ->action('save'),
        ];
    }
}
