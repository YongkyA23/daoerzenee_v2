<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PhotoCategoryResource\Pages;
use App\Models\KategoriFoto;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class PhotoCategoryResource extends Resource
{
    protected static ?string $model = KategoriFoto::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getPermissionPrefixes(): array
    {
        return [
            'view',
            'view_any',
            'create',
            'update',
            'delete',
            'delete_any',
            'publish'
        ];
    }

    protected static ?int $navigationSort = 2;
    public static function getNavigationGroup(): ?string
    {
        return 'Media';
    }

    public static function getLabel(): string
    {
        return 'Photo Category';
    }

    // Customize the plural label
    public static function getPluralLabel(): string
    {
        return 'Photo Categories';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Photo Category')->schema([
                    Forms\Components\TextInput::make('namaKategoriFoto')
                        ->label('Category Name')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('deskripsiKategori')
                        ->label('Description')
                        ->maxLength(500)
                        ->helperText('Provide a short description of this photo category.'),

                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('namaKategoriFoto')
                    ->label('Category Name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('deskripsiKategori')
                    ->label('Category Description')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPhotoCategories::route('/'),
            'create' => Pages\CreatePhotoCategory::route('/create'),
            'edit' => Pages\EditPhotoCategory::route('/{record}/edit'),
        ];
    }
}
