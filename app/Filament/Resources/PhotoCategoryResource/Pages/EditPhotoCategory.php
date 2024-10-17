<?php

namespace App\Filament\Resources\PhotoCategoryResource\Pages;

use App\Filament\Resources\PhotoCategoryResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;

class EditPhotoCategory extends EditRecord
{
    protected static string $resource = PhotoCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('save')
                ->label('Save changes')
                ->action('save'),
            Actions\DeleteAction::make(),
        ];
    }
}
