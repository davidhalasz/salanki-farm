<?php

namespace App\Filament\Resources\GalleryResource\Pages;

use Filament\Forms;
use Closure;
use App\Models\Gallery;
use Filament\Pages\Actions;
use Filament\Pages\Actions\Action;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\GalleryResource;

class CreateGallery extends CreateRecord

{
    protected static string $resource = GalleryResource::class;

    protected function getFormActions(): array
    {
        return [
            Action::make('createImage')->action('createImage')->color('primary')->label('Hozzáadás'),
            $this->getCancelFormAction()->label('Mégsem')
        ];
    }

    public function createImage() {
        $state = $this->form->getState();
        foreach ($state['filepath'] as $key => $image) {
            Gallery::create([
                'filepath' => $image,
            ]);
        }
        return redirect('/admin/galleries');
    }

    public function getTitle(): string
    {
        return 'Képek hozzáadása';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
