<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientResource\Pages;
use App\Filament\Resources\ClientResource\RelationManagers;
use App\Models\Client;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClientResource extends Resource
{
    protected static ?string $model = Client::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'Relations';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('General Data')
                    ->description('Input data of client')
                    ->icon('heroicon-o-user')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                FileUpload::make('image')
                                    ->image()
                                    ->directory('clients')
                                    ->helperText('Upload logo client .png')
                                    ->required()
                                    ->label('Logo'),
                                Grid::make(1)
                                    ->schema([
                                        TextInput::make('name')
                                            ->required()
                                            ->maxLength(255),
                                        Toggle::make('is_active')
                                            ->required()
                                            ->default(true),
                                    ])->columnSpan(1)
                            ]),
                        Grid::make(2)
                        ->schema([
                            FileUpload::make('image_office')
                                ->image()
                                ->directory('images/office')
                                ->nullable()
                                ->helperText('Upload office client for testimonial'),
                            RichEditor::make('desscription')
                            ->nullable(),
                        ])
                    ]),
                Section::make('Contact Data')
                    ->description('Input contact data of client')
                    ->icon('heroicon-o-phone')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('phone')
                                    ->required(),
                                TextInput::make('email')
                                    ->email()
                                    ->required(),
                            ]),
                        Textarea::make('address')
                            ->required()
                    ]),
                Section::make('Testimoni')
                    ->description('Input testimoni of client')
                    ->icon('heroicon-o-document-check')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                Toggle::make('testimoni_show')
                                    ->required()
                                    ->default(false),
                                Select::make('star')
                                    ->nullable()
                                    ->options([
                                        1 => '⭐',
                                        2 => '⭐⭐',
                                        3 => '⭐⭐⭐',
                                        4 => '⭐⭐⭐⭐',
                                        5 => '⭐⭐⭐⭐⭐',
                                    ])
                                    ->required()
                            ]),
                        RichEditor::make('testimoni')
                            ->nullable(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('logo')
                    ->circular()
                    ->size(100)
                    ->toggleable(isToggledHiddenByDefault: false),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('phone')
                    ->searchable(),
                TextColumn::make('email')
                    ->searchable(),
                TextColumn::make('address')
                    ->searchable(),
                ToggleColumn::make('is_active')
                    ->label('Active')
            ])
            ->filters([
                SelectFilter::make('is_active')
                    ->options([
                        '1' => 'Active',
                        '0' => 'Inactive',
                    ])
                    ->searchable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
            ])
            ->emptyStateHeading('No Clients Found')
            ->emptyStateDescription('Get started by adding a new client.')
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListClients::route('/'),
            'create' => Pages\CreateClient::route('/create'),
            'edit' => Pages\EditClient::route('/{record}/edit'),
        ];
    }
}
