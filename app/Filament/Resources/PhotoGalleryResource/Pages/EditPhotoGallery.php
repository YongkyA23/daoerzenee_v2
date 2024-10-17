<?php

namespace App\Filament\Resources\PhotoGalleryResource\Pages;

use App\Filament\Resources\PhotoGalleryResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;

class EditPhotoGallery extends EditRecord
{
    protected static string $resource = PhotoGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('save')
                ->label('Save Changes')
                ->action('save'),
            Actions\DeleteAction::make(),
        ];
    }
}
