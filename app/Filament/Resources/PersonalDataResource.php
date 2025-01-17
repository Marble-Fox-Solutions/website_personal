<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersonalDataResource\Pages;
use App\Filament\Resources\PersonalDataResource\RelationManagers;
use App\Models\PersonalData;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PersonalDataResource extends Resource
{
    protected static ?string $model = PersonalData::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([       
                Forms\Components\TextInput::make('first_name')->required()->maxLength(50),
                Forms\Components\TextInput::make('last_name')->required()->maxLength(150),
                Forms\Components\TextInput::make('range')->maxLength(250),
                Forms\Components\TextInput::make('address')->maxLength(200),
                Forms\Components\TextInput::make('city')->maxLength(200),
                Forms\Components\TextInput::make('postal_code')->maxLength(5),
                Forms\Components\TextInput::make('state')->maxLength(50),
                Forms\Components\TextInput::make('country')->maxLength(50),
                Forms\Components\TextInput::make('phone')->maxLength(9),
                Forms\Components\TextInput::make('prefix')->maxLength(5),
                Forms\Components\TextInput::make('email')->maxLength(150),
                Forms\Components\TextInput::make('website')->maxLength(200),
                Forms\Components\TextInput::make('linkedin')->maxLength(200),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('first_name'),
                Tables\Columns\TextColumn::make('last_name'),
                Tables\Columns\TextColumn::make('range'),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('city'),
                Tables\Columns\TextColumn::make('postal_code'),
                Tables\Columns\TextColumn::make('state'),
                Tables\Columns\TextColumn::make('country'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('prefix'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('website'),
                Tables\Columns\TextColumn::make('linkedin')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListPersonalData::route('/'),
            'create' => Pages\CreatePersonalData::route('/create'),
            'edit' => Pages\EditPersonalData::route('/{record}/edit'),
        ];
    }
}
