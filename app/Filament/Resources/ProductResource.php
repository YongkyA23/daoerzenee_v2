<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Produk;
use App\Models\KategoriProduk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Produk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function getLabel(): string
    {
        return 'Product'; // Singular label
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
                    ->required(),

                Forms\Components\Select::make('kategoriProduk_id')
                    ->label('Category')
                    ->relationship('kategoriProduk', 'namaKategori')
                    ->createOptionForm([
                        Forms\Components\TextInput::make('namaKategori')
                            ->label('Category Name')
                            ->required()
                            ->maxLength(255)
                            ->reactive()
                            ->debounce(500)
                            ->afterStateUpdated(function ($state, callable $set) {
                                $set('slug', Str::slug($state));
                            }),

                        Forms\Components\TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->disabled()
                            ->dehydrated()
                            ->helperText('This will be used for the URL.'),

                        Forms\Components\Textarea::make('deskripsiKategori')
                            ->label('Description')
                            ->maxLength(500)
                            ->helperText('Provide a short description of this product category.'),
                    ])
                    ->required(),
                Forms\Components\FileUpload::make('fotoProduk')
                    ->label('Product Image')
                    ->directory('products')
                    ->image()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Define table columns for listing
                Tables\Columns\TextColumn::make('namaProduk')
                    ->label('Product Name'),

                Tables\Columns\ImageColumn::make('fotoProduk')
                    ->disk('public')
                    ->label('Product Image'),

                Tables\Columns\TextColumn::make('deskripsiProduk')
                    ->label('Description'),

                Tables\Columns\TextColumn::make('hargaProduk')
                    ->label('Price'),

                Tables\Columns\TextColumn::make('kategoriProduk.namaKategori')
                    ->label('Category'),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
