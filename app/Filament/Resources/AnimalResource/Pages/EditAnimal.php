<?php

namespace App\Filament\Resources\AnimalResource\Pages;

use Filament\Pages\Actions;
use Filament\Pages\Actions\Action;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\AnimalResource;

class EditAnimal extends EditRecord
{
    protected static string $resource = AnimalResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->label('Törlés')->modalHeading('Biztos törölni szeretnéd a farmlakót?'),
        ];
    }

    protected function getFormActions(): array
    {
        return [
            $this->getSaveFormAction()->label('Változtatások mentése'),
            $this->getCancelFormAction()->label('Mégsem')
        ];
    }

    public function getTitle(): string
    {
        return 'Állat szerkesztése';
    }

    protected function getRedirectUrl(): string {
        return $this->getResource()::getUrl('index');
    }
}
