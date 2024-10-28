<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PhotoGalleryResource\Pages;
use App\Models\Galeri;
use App\Models\KategoriFoto;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PhotoGalleryResource extends Resource
{
    protected static ?string $model = Galeri::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

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

    protected static ?int $navigationSort = 1;
    public static function getNavigationGroup(): ?string
    {
        return 'Media';
    }

    public static function getLabel(): string
    {
        return 'Photo Gallery';
    }

    // Customize the plural label
    public static function getPluralLabel(): string
    {
        return 'Photo Galleries';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Photo Gallery')->schema([
                    Forms\Components\TextInput::make('namaFoto')
                        ->label('Photo Name')
                        ->required()
                        ->maxLength(255),

                    Forms\Components\FileUpload::make('pathFoto')
                        ->label('Upload Photo')
                        ->directory('photos')
                        ->image()
                        ->required()
                        ->maxSize(10240),

                    Forms\Components\Select::make('kategoriFoto_id')
                        ->label('Photo Category')
                        ->relationship('kategoriFoto', 'namaKategoriFoto')
                        ->createOptionForm([
                            Forms\Components\TextInput::make('namaKategoriFoto')
                                ->label('Category Name')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\Textarea::make('deskripsiKategori')
                                ->label('Description')
                                ->maxLength(500)
                                ->helperText('Provide a short description of this photo category.'),
                        ])
                        ->required(),

                    Forms\Components\Textarea::make('deskripsiFoto')
                        ->label('Photo Description')
                        ->maxLength(500)
                        ->required()
                        ->helperText('Provide a short description of this photo.'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('pathFoto')
                    ->label('Photo')
                    ->size(150)
                    ->sortable(),

                Tables\Columns\TextColumn::make('namaFoto')
                    ->label('Photo Name')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('kategoriFoto.namaKategoriFoto')
                    ->label('Category')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('deskripsiFoto')
                    ->label('Description')
                    ->limit(50),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPhotoGalleries::route('/'),
            'create' => Pages\CreatePhotoGallery::route('/create'),
            'edit' => Pages\EditPhotoGallery::route('/{record}/edit'),
        ];
    }
}
