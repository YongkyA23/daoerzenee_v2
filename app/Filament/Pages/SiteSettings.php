<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use App\Models\SiteSetting;
use Filament\Notifications\Notification;

class SiteSettings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static string $view = 'filament.pages.site-settings';

    protected static ?int $navigationSort = 99;
    public static function getNavigationGroup(): ?string
    {
        return 'Site Settings';
    }

    public bool $isEditing = false;
    public SiteSetting $settings;

    // Form properties bound to fields
    public $wa_number;
    public $ig_link;
    public $facebook_link;
    public $address;
    public $maps_link;

    public function mount(): void
    {
        $this->settings = SiteSetting::first() ?? new SiteSetting();

        // Initialize form fields with existing data
        $this->wa_number = $this->settings->wa_number;
        $this->ig_link = $this->settings->ig_link;
        $this->facebook_link = $this->settings->facebook_link;
        $this->address = $this->settings->address;
        $this->maps_link = $this->settings->maps_link;
    }

    public function getLastUpdatedProperty()
    {
        return $this->settings->updated_at ? $this->settings->updated_at->format('Y-m-d H:i:s') : 'Never';
    }

    public function toggleEdit()
    {
        $this->isEditing = !$this->isEditing;
    }

    public function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('wa_number')
                ->label('WhatsApp Number')
                ->prefix('+62')
                ->placeholder('e.g., 8789919228')
                ->disabled(!$this->isEditing)
                ->reactive(),

            TextInput::make('ig_link')
                ->label('Instagram Link')
                ->url()
                ->placeholder('https://instagram.com/yourprofile')
                ->disabled(!$this->isEditing)
                ->reactive(),

            TextInput::make('facebook_link')
                ->label('Facebook Link')
                ->url()
                ->placeholder('https://facebook.com/yourprofile')
                ->disabled(!$this->isEditing)
                ->reactive(),

            TextInput::make('address')
                ->label('Address')
                ->placeholder('e.g., 123 Main St, City, Country')
                ->disabled(!$this->isEditing)
                ->reactive(),

            TextInput::make('maps_link')
                ->label('Google Maps Link')
                ->url()
                ->placeholder('https://maps.google.com/?q=location')
                ->disabled(!$this->isEditing)
                ->reactive(),
        ]);
    }

    public function save()
    {

        if (substr($this->wa_number, 0, 1) === '0') {
            $this->wa_number = ltrim($this->wa_number, '0');
        }

        $this->settings->wa_number = $this->wa_number;
        $this->settings->ig_link = $this->ig_link;
        $this->settings->facebook_link = $this->facebook_link;
        $this->settings->address = $this->address;
        $this->settings->maps_link = $this->maps_link;

        $saved = $this->settings->save();
        $this->isEditing = false;

        if ($saved) {
            Notification::make()
                ->title('Settings saved successfully.')
                ->success()
                ->send();
        } else {
            Notification::make()
                ->title('Failed to save settings.')
                ->danger()
                ->send();
        }
    }
}
