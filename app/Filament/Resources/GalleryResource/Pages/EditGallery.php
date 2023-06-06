<?php

namespace App\Filament\Resources\GalleryResource\Pages;

use App\Filament\Resources\GalleryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGallery extends EditRecord
{
    protected static string $resource = GalleryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->label('Törlés')->modalHeading('Kép törlése'),
        ];
    }

    protected function getFormActions(): array
    {
        return [
            $this->getCancelFormAction()->label('Vissza a képekhez')
        ];
    }

    public function getTitle(): string
    {
        return 'Képek szerkesztése';
    }
}
