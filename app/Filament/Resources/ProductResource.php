<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Produk;
use App\Models\KategoriProduk;
use Filament\Actions\Modal\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Produk::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

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

    protected static ?int $navigationSort = 3;

    public static function getNavigationGroup(): ?string
    {
        return 'Manage Products';
    }

    public static function getLabel(): string
    {
        return 'Product'; // Singular label
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Product')->schema([
                    Forms\Components\TextInput::make('namaProduk')
                        ->label('Product Name')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('deskripsiProduk')
                        ->label('Product Description')
                        ->required(),

                    Forms\Components\TextInput::make('hargaProduk')
                        ->label('Product Price')
                        ->numeric()
                        ->required()
                        ->prefix('Rp.'),

                    Forms\Components\Select::make('kategoriProduk_id')
                        ->label('Category')
                        ->relationship('kategoriProduk', 'namaKategori')
                        ->createOptionForm([
                            Forms\Components\TextInput::make('namaKategori')
                                ->label('Category Name')
                                ->required()
                                ->maxLength(255),

                            Forms\Components\Textarea::make('deskripsiKategori')
                                ->label('Description')
                                ->maxLength(500)
                                ->helperText('Provide a short description of this product category.'),
                        ])
                        ->required(),
                    Repeater::make('images')
                        ->relationship('images')
                        ->schema([
                            FileUpload::make('pathFoto')
                                ->label('Product Image')
                                ->directory('products')
                                ->image()
                                ->required()
                                ->maxSize(5120)
                                ->imageCropAspectRatio('1:1')
                                ->imageResizeMode('contain')
                                ->imageResizeTargetWidth(1000)
                                ->imageResizeTargetHeight(1000)
                        ])
                        ->label('Product Images')
                        ->minItems(1)
                        ->maxItems(5)
                        ->addButtonLabel('Add New Product Image'),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('namaProduk')
                    ->label('Product Name')
                    ->sortable()
                    ->searchable(),


                Tables\Columns\ImageColumn::make('images.pathFoto')
                    ->disk('public')
                    ->size(150)
                    ->limit(1),

                Tables\Columns\TextColumn::make('deskripsiProduk')
                    ->label('Description'),

                Tables\Columns\TextColumn::make('hargaProduk')
                    ->label('Price'),

                Tables\Columns\TextColumn::make('kategoriProduk.namaKategori')
                    ->label('Category')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                // Add filters if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Define relationships if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
