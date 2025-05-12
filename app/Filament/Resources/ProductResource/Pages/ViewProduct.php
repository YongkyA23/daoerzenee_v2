<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\Grid;
use Filament\Support\Enums\FontWeight;
use Filament\Infolists\Components\Actions\Action;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ViewEntry;

class ViewProduct extends ViewRecord
{
    protected static string $resource = ProductResource::class;

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Product Details')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextEntry::make('namaProduk')
                                    ->label('Product Name')
                                    ->weight(FontWeight::Bold)
                                    ->size('lg'),

                                TextEntry::make('kategoriProduk.namaKategori')
                                    ->label('Category'),

                                TextEntry::make('hargaProduk')
                                    ->label('Price')
                                    ->money('IDR'),
                            ]),

                        TextEntry::make('deskripsiProduk')
                            ->label('Description')
                            ->markdown()
                            ->columnSpanFull(),
                    ]),

                Section::make('Product Images')
                    ->schema([
                        ViewEntry::make('images')
                            ->view('filament.components.horizontal-image-chips')
                    ]),
            ]);
    }
}
