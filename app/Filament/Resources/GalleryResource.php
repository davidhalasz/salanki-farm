<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use App\Models\Gallery;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\GalleryResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\GalleryResource\RelationManagers;
use Filament\Tables\Columns\ImageColumn;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photograph';

    protected static ?string $navigationLabel = 'Galéria';

    protected static ?string $pluralModelLabel  = 'Galéria';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make([
                      FileUpload::make('filepath')
                        ->multiple()
                        ->directory('galleries')
                        ->storeFileNamesIn('gallery_filename')
                        ->image()
                        ->label('Egy vagy több kép kiválasztása')
                        ->placeholder('Húzd ide a képeket vagy klikkelj ide')
                        ->required(),
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\Layout\Split::make([
                    Tables\Columns\Layout\Grid::make()
                        ->schema([
                            Tables\Columns\Layout\Grid::make()
                                ->schema([
                                    ImageColumn::make('filepath')
                                        ->height('200px')
                                        ->extraImgAttributes([
                                            'class' => 'object-cover h-fit rounded-t-xl w-full',
                                        ]),
                                ])
                                ->columns(1),
                        ])
                        ->columns(1),
                ]),
            ])
            ->actions([
                Tables\Actions\DeleteAction::make()->modalHeading('Kép törlése'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()->modalHeading('Kiválasztott kép(ek) törlése'),
            ])
            ->contentGrid([
                'md' => 2,
                'xl' => 4,
                '2xl' => 5,
            ]);

    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
        ];
    }
}
