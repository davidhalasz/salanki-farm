<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'Szolgáltatások';

    protected static ?string $pluralModelLabel  = 'Szolgáltatások';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('filepath')
                    ->panelAspectRatio('2:1')
                    ->directory('services')
                    ->storeFileNamesIn('original_filename')
                    ->image()
                    ->label('Kép kiválasztása')
                    ->placeholder('Húzd ide a képet vagy klikkelj ide')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Szolgáltatás neve'),
                Forms\Components\Textarea::make('description')
                    ->maxLength(65535)
                    ->label('Leírás'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Szolgáltatás neve'),
                Tables\Columns\TextColumn::make('description')->label('Leírás'),
                ImageColumn::make('filepath')->label('Kép'),
                ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Szerkesztés'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()->label('Kijelöltek törlése')->modalHeading('Szolgáltatás(ok) törlése'),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
