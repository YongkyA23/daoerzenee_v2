<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamMemberResource\Pages;
use App\Models\TeamMember;
use App\Models\Position;
use App\Models\Location;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TeamMemberResource extends Resource
{

    protected static ?string $model = TeamMember::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-group';


    protected static ?int $navigationSort = 10;
    public static function getNavigationGroup(): ?string
    {
        return 'Teams';
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Team Member Details')
                    ->schema([
                        FileUpload::make('photo')
                            ->label('Photo')
                            ->image()
                            ->directory('team-photos')
                            ->required(),

                        TextInput::make('name')
                            ->label('Name')
                            ->required(),

                        // Position dropdown with inline creation
                        Select::make('position_id')
                            ->label('Position')
                            ->relationship('position', 'name')
                            ->required()
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->label('New Position Name')
                                    ->required(),
                            ])
                            ->createOptionUsing(function ($data) {
                                return Position::create($data)->id;
                            }),

                        // Location dropdown with inline creation
                        Select::make('location_id')
                            ->label('Location')
                            ->relationship('location', 'name')
                            ->required()
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->label('New Location Name')
                                    ->required(),
                            ])
                            ->createOptionUsing(function ($data) {
                                return Location::create($data)->id;
                            }),

                        TextInput::make('phone')
                            ->label('Phone')
                            ->mask('9999-9999-9999')
                            ->placeholder('e.g., 08123456789'),
                    ])
                    ->columnSpan('full'), // Make section span the full width
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo')
                    ->label('Photo'),
                TextColumn::make('name')
                    ->label('Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('position.name')
                    ->label('Position')
                    ->sortable(),
                TextColumn::make('location.name')
                    ->label('Location')
                    ->sortable(),
                TextColumn::make('phone')
                    ->label('Phone')
                    ->sortable(),
            ])
            ->filters([
                // Add filters here if needed in the future
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
            // Define relations here if needed in the future
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTeamMembers::route('/'),
            'create' => Pages\CreateTeamMember::route('/create'),
            'edit' => Pages\EditTeamMember::route('/{record}/edit'),
        ];
    }
}
