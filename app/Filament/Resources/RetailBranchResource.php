<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RetailBranchResource\Pages;
use App\Filament\Resources\RetailBranchResource\RelationManagers;
use App\Models\RetailBranch;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RetailBranchResource extends Resource
{
    protected static ?string $model = RetailBranch::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('retail_id')
                    ->relationship('retail', 'name')
                    ->label('Retail')
                    ->preload()
                    ->searchable()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('code')
                            ->label('Code')
                            ->required(),
                        Forms\Components\TextInput::make('name')
                            ->label('Name')
                            ->required(),
                        Forms\Components\Textarea::make('description')
                            ->label('Description'),
                    ])
                    ->required(),
                Forms\Components\TextInput::make('code')
                    ->label('Code')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->label('Name')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->label('Description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('retail.name')
                    ->label('Retail')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('code')
                    ->label('Code')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Desc.')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('retail')
                    ->relationship('retail', 'name')
                    ->label('Retail')
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
            'index' => Pages\ListRetailBranches::route('/'),
            'create' => Pages\CreateRetailBranch::route('/create'),
            'edit' => Pages\EditRetailBranch::route('/{record}/edit'),
        ];
    }
}
