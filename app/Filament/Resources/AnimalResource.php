<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use App\Models\Animal;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AnimalResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AnimalResource\RelationManagers;

class AnimalResource extends Resource
{
    protected static ?string $model = Animal::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe';

    protected static ?string $navigationLabel = 'Farm lakói';

    protected static ?string $pluralModelLabel  = 'Állatok';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Állat neve')
                    ->maxLength(255),
                FileUpload::make('filepath')
                    ->panelAspectRatio('2:1')
                    ->directory('animals')
                    ->storeFileNamesIn('original_filename')
                    ->image()
                    ->label('Kép kiválasztása')
                    ->placeholder('Húzd ide a képet vagy klikkelj ide')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Állat neve')->sortable()->searchable(),
                ImageColumn::make('filepath')->label('Avatar'),
                Tables\Columns\TextColumn::make('created_at')->formatStateUsing(function ($record) {
                    return Carbon::parse($record->created_at)->locale('hu_HU')->isoFormat('LL');
                })->label('Hozzáadva'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Szerkesztés'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()->label('Törlés')->modalHeading('Farmlakó törlése'),
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
            'index' => Pages\ListAnimals::route('/'),
            'create' => Pages\CreateAnimal::route('/create'),
            'edit' => Pages\EditAnimal::route('/{record}/edit'),
        ];
    }
}
