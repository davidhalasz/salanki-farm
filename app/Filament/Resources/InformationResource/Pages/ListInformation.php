<?php

namespace App\Filament\Resources\InformationResource\Pages;

use App\Filament\Resources\InformationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInformation extends ListRecords
{
    protected static string $resource = InformationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Új információ'),
        ];
    }

    public function getTitle(): string
    {
        return 'Információk';
    }
}
