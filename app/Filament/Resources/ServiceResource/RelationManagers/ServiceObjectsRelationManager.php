<?php

namespace App\Filament\Resources\ServiceResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceObjectsRelationManager extends RelationManager
{
    protected static string $relationship = 'serviceObjects';

    protected static ?string $recordTitleAttribute = 'ServiceObject';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Upload Image')
                    ->description('Upload image of service object')
                    ->icon('heroicon-o-photo')
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->helperText('Object image service')
                            ->directory('images/services'),
                    ])
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('ServiceObject')
            ->columns([
                Stack::make([
                    ImageColumn::make('image')
                        ->size(100),
                ]),
            ])
            ->filters([
                //
            ])
            ->contentGrid([
                'md' => 2,
                'xl' => 3,
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
            ])
            ->defaultSort('sort', 'asc')
            ->reorderable('sort')
            ->emptyStateHeading('No service objects found')
            ->emptyStateDescription('Get started by adding a new service object.')
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }
}
