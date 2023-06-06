<?php

namespace App\Filament\Resources\GalleryResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\GalleryResource;
use Closure;
class ListGalleries extends ListRecords
{
    protected static string $resource = GalleryResource::class;

    protected function getTableRecordUrlUsing(): ?Closure
    {
        return null;
    }

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Új képek hozzáadása'),
        ];
    }

    public function getTitle(): string
    {
        return 'Galéria';
    }

}
