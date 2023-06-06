<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\ServiceResource;
use Filament\Tables\Actions\DeleteBulkAction;

class ListServices extends ListRecords
{
    protected static string $resource = ServiceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Új szolgáltatás'),
        ];
    }

    public function getTitle(): string
    {
        return 'Szolgáltatások';
    }
}
