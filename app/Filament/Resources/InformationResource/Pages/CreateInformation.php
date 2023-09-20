<?php

namespace App\Filament\Resources\InformationResource\Pages;

use App\Filament\Resources\InformationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInformation extends CreateRecord
{
    protected static string $resource = InformationResource::class;

    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction()->label('Hozzáadás'),
            $this->getCreateAnotherFormAction()->label('Hozzáadás és új létrehozás'),
            $this->getCancelFormAction()->label('Mégsem')
        ];
    }

    public function getTitle(): string
    {
        return 'Információ hozzáadása';
    }

    protected function getRedirectUrl(): string {
        return $this->getResource()::getUrl('index');
    }
}
