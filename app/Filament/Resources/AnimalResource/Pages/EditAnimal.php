<?php

namespace App\Filament\Resources\AnimalResource\Pages;

use App\Models\Animal;
use Filament\Pages\Actions;
use Filament\Pages\Actions\Action;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\AnimalResource;
use Illuminate\Support\Facades\File;

class EditAnimal extends EditRecord
{
    protected static string $resource = AnimalResource::class;

    protected function getActions(): array
    {
        $animal = $this->record;

        return [
            Action::make('Törlés')
                    ->action(function () use ($animal) {
                        $image_path = public_path() .'/'. $animal->filepath;
                        
                        if(File::exists($image_path)) {
                            unlink($image_path);
                        }
                        
                        //$foundAnimal = Animal::findById($animal->id);
                        //dd($foundAnimal);
                        $animal->delete();
                        return redirect('/admin/animals');
                    })

                    ->color('danger')
                    ->modalHeading('Biztos törölni szeretnéd a farmlakót?')
                    ->requiresConfirmation()
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
