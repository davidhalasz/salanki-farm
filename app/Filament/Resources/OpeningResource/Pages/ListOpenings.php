<?php

namespace App\Filament\Resources\OpeningResource\Pages;

use App\Filament\Resources\OpeningResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOpenings extends ListRecords
{
    protected static string $resource = OpeningResource::class;

    protected function getActions(): array
    {
        return [

        ];
    }

    public function getTitle(): string
    {
        return 'Nyitvatartás';
    }
}
