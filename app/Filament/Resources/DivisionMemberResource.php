<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DivisionMemberResource\Pages;
use App\Filament\Resources\DivisionMemberResource\RelationManagers;
use App\Models\Division;
use App\Models\DivisionMember;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DivisionMemberResource extends Resource
{
    protected static ?string $model = DivisionMember::class;

    protected static ?string $navigationIcon = '';

    public static function getNavigationGroup(): string
    {
        return 'Master Data';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->directory('uploads/division_members')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('division_id')
                    ->label('Division')
                    ->options(Division::all()->pluck('name', 'id'))
                    ->required(),
                Forms\Components\TextInput::make('role')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('division.name')
                    ->label('Division')
                    ->sortable(),
                Tables\Columns\TextColumn::make('role')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListDivisionMembers::route('/'),
            'create' => Pages\CreateDivisionMember::route('/create'),
            'edit' => Pages\EditDivisionMember::route('/{record}/edit'),
        ];
    }
}
