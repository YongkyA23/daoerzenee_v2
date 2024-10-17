<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductCategoryResource\Pages;
use App\Models\KategoriProduk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class ProductCategoryResource extends Resource
{
    protected static ?string $model = KategoriProduk::class;

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
    protected static ?int $navigationSort = 4;
    public static function getNavigationGroup(): ?string
    {
        return 'Manage Products';
    }
    public static function getLabel(): string
    {
        return 'Product Category';
    }

    // Customize the plural label
    public static function getPluralLabel(): string
    {
        return 'Product Categories';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Product Category')->schema([
                    Forms\Components\TextInput::make('namaKategori')
                        ->label('Category Name')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('deskripsiKategori')
                        ->label('Description')
                        ->maxLength(500)
                        ->helperText('Provide a short description of this product category.'),
                ])
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('namaKategori')
                    ->label('Category Name')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug'),

                Tables\Columns\TextColumn::make('deskripsiKategori')
                    ->label('Description')
                    ->limit(50),
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
            'index' => Pages\ListProductCategories::route('/'),
            'create' => Pages\CreateProductCategory::route('/create'),
            'edit' => Pages\EditProductCategory::route('/{record}/edit'),
        ];
    }
}
