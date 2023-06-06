<?php

namespace App\Filament\Resources\AnimalResource\Pages;

use Filament\Pages\Actions;
use Filament\Pages\Actions\Action;
use App\Filament\Resources\AnimalResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAnimal extends CreateRecord
{
    protected static string $resource = AnimalResource::class;

    public function getTitle(): string
    {
        return 'Új állat hozzáadása';
    }

    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction()->label('Hozzáadás'),
            $this->getCreateAnotherFormAction()->label('Hozzáadás és újabb létrehozása'),
            $this->getCancelFormAction()->label('Mégsem')
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

