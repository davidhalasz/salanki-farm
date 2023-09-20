<?php

namespace App\Filament\Resources\PriceResource\Pages;

use App\Filament\Resources\PriceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePrice extends CreateRecord
{
    protected static string $resource = PriceResource::class;

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
        return 'Új szolgáltatás hozzáadása';
    }

    protected function getRedirectUrl(): string {
        return $this->getResource()::getUrl('index');
    }
}
