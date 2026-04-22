<?php

namespace App\Filament\Resources\MailResource\Pages;

use App\Filament\Resources\MailResource;
use App\Models\Mail;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;

class EditMail extends EditRecord
{
    protected static string $resource = MailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('Answered')
                ->label('Mark as Answered')
                ->color('success')
                ->icon('heroicon-s-check-circle')
                ->requiresConfirmation()
                ->visible(function (Mail $record) {
                    return !$record->is_answered;
                })
                ->action(function (Mail $record) {
                    $record->update([
                        'is_answered' => true,
                        'date_answer' => now(),
                    ]);

                    $this->refreshFormData([
                        'is_answered',
                        'date_answer',
                    ]);
                })
                ->successNotificationTitle('Marked as Answered'),
            Actions\DeleteAction::make(),
        ];
    }
}
