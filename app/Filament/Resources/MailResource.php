<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MailResource\Pages;
use App\Filament\Resources\MailResource\RelationManagers;
use App\Models\Mail;
use Dom\Text;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MailResource extends Resource
{
    protected static ?string $model = Mail::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationGroup = 'Relations';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('is_answered', false)->count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('General Data')
                    ->description('Input data of mail')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('name')
                                    ->required(),
                                TextInput::make('email')
                                    ->email()
                                    ->required(),
                            ]),
                        TextInput::make('company')
                            ->required(),
                    ]),
                Section::make('Status Data')
                    ->description('Input status data of mail')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                DatePicker::make('date')
                                    ->default(now())
                                    ->disabled()
                                    ->label('Date In'),
                                Select::make('is_answered')
                                    ->disabled()
                                    ->options([
                                        true => 'Answered',
                                        false => 'Not Answered',
                                    ]),
                                DatePicker::make('date_answer')
                                    ->label('Date Answer')
                                    ->nullable()
                                    ->disabled()
                                    ->dehydrated(true),
                            ])
                    ]),
                Section::make('Message Data')
                    ->description('Input message data of mail')
                    ->schema([
                        TextInput::make('subject')
                            ->required(),
                        RichEditor::make('message')
                            ->required()
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('subject')
                    ->searchable(),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('company')
                    ->searchable(),
                TextColumn::make('email')
                    ->searchable(),
                IconColumn::make('is_answered')
                    ->label('Answered')
                    ->sortable()
                    ->boolean(), // otomatis ganti antara check & x-circle

                TextColumn::make('date')
                    ->date(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([])
            ->emptyStateHeading('No Mails found')
            ->emptyStateDescription('Waiting for new Mails.');
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
            'index' => Pages\ListMails::route('/'),
            'create' => Pages\CreateMail::route('/create'),
            'edit' => Pages\EditMail::route('/{record}/edit'),
        ];
    }
}
