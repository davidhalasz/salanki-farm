<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use App\Models\Opening;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TimePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\OpeningResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OpeningResource\RelationManagers;

class OpeningResource extends Resource
{
    protected static ?string $model = Opening::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    protected static ?string $navigationLabel = 'Nyitvatartás';

    protected static ?string $pluralModelLabel  = 'Nyitvatartás';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('day')
                    ->disabled()
                    ->label('Nap'),
                TimePicker::make('start')
                    ->required()->label('Nyitás'),
                TimePicker::make('end')
                    ->required()->label('Zárás'),
                Forms\Components\Toggle::make('closed')
                    ->required()->label('Egész nap zárva?'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('day')->label('Nap'),
                Tables\Columns\TextColumn::make('start')->label('Nyitás')
                ->getStateUsing(function ($record): string {
                    return $record->closed ? '-' : $record->start;
                }),
                Tables\Columns\TextColumn::make('end')->label('Zárás')
                ->getStateUsing(function ($record): string {
                    return $record->closed ? '-' : $record->end;
                }),
                Tables\Columns\IconColumn::make('closed')
                    ->extraAttributes(['class' => 'flex justify-center'])
                    ->alignCenter()
                    ->boolean()->label('Egész nap zárva van?'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->formatStateUsing(function ($record) {
                        return Carbon::parse($record->created_at)->locale('hu_HU')->isoFormat('LL');
                    })->label('Módosítás dátuma'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Szerkesztés'),
            ])
            ->bulkActions([
                //
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
            'index' => Pages\ListOpenings::route('/'),
            'create' => Pages\CreateOpening::route('/create'),
            'edit' => Pages\EditOpening::route('/{record}/edit'),
        ];
    }
}
