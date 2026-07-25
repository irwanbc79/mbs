<?php

namespace App\Filament\Resources\Tickets\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class TicketsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('ticket_number')
                    ->label('No. Tiket')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->copyable(),
                TextColumn::make('title')
                    ->label('Masalah')
                    ->searchable()
                    ->limit(40),
                TextColumn::make('client_name')
                    ->label('Klien')
                    ->searchable(),
                TextColumn::make('priority')
                    ->label('Prioritas')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'low'    => 'gray',
                        'medium' => 'info',
                        'high'   => 'warning',
                        'urgent' => 'danger',
                        default  => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'low'    => 'Low',
                        'medium' => 'Medium',
                        'high'   => 'High',
                        'urgent' => 'URGENT',
                        default  => $state,
                    }),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'open'        => 'danger',
                        'in_progress' => 'warning',
                        'waiting'     => 'info',
                        'resolved'    => 'success',
                        'closed'      => 'gray',
                        default       => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'open'        => 'Open',
                        'in_progress' => 'In Progress',
                        'waiting'     => 'Waiting',
                        'resolved'    => 'Resolved',
                        'closed'      => 'Closed',
                        default       => $state,
                    }),
                TextColumn::make('category')
                    ->label('Kategori')
                    ->badge()
                    ->color('gray')
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'bug'         => 'Bug/Error',
                        'feature'     => 'Fitur',
                        'question'    => 'Pertanyaan',
                        'maintenance' => 'Maintenance',
                        default       => 'Lainnya',
                    }),
                TextColumn::make('assignedUser.name')
                    ->label('PIC')
                    ->placeholder('—'),
                TextColumn::make('created_at')
                    ->label('Dibuka')
                    ->date('d M Y')
                    ->sortable(),
                TextColumn::make('resolved_at')
                    ->label('Resolved')
                    ->date('d M Y')
                    ->sortable()
                    ->placeholder('—'),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'open'        => 'Open',
                        'in_progress' => 'In Progress',
                        'waiting'     => 'Waiting',
                        'resolved'    => 'Resolved',
                        'closed'      => 'Closed',
                    ]),
                SelectFilter::make('priority')
                    ->label('Prioritas')
                    ->options([
                        'low'    => 'Low',
                        'medium' => 'Medium',
                        'high'   => 'High',
                        'urgent' => 'Urgent',
                    ]),
                SelectFilter::make('category')
                    ->label('Kategori')
                    ->options([
                        'bug'         => 'Bug/Error',
                        'feature'     => 'Fitur',
                        'question'    => 'Pertanyaan',
                        'maintenance' => 'Maintenance',
                        'other'       => 'Lainnya',
                    ]),
            ])
            ->recordActions([
                Action::make('kirimStatusWa')
                    ->label('Update WA')
                    ->icon('heroicon-o-paper-airplane')
                    ->color('success')
                    ->requiresConfirmation()
                    ->visible(fn (\App\Models\Ticket $record) => !empty($record->client_phone))
                    ->action(function (\App\Models\Ticket $record) {
                        $statusText = match ($record->status) {
                            'open'        => 'Baru Diterima (Open)',
                            'in_progress' => 'Sedang Diproses oleh Tim Tech MBS',
                            'resolved'    => 'Selesai (Resolved)',
                            'closed'      => 'Ditutup (Closed)',
                            default       => $record->status,
                        };
                        $msg = "Halo Bpk/Ibu {$record->client_name},\n\nUpdate status tiket support #{$record->ticket_number} (Mora Bangun Solutions):\nSubjek: {$record->title}\nStatus Terbaru: {$statusText}\n\nTerima kasih atas kepercayaan Anda.";
                        
                        $waService = new \App\Services\WhatsAppNotificationService();
                        $sent = $waService->sendMessage($record->client_phone, $msg);
                        if ($sent) {
                            \Filament\Notifications\Notification::make()
                                ->title('Notifikasi Status WA Terkirim')
                                ->success()
                                ->send();
                        } else {
                            \Filament\Notifications\Notification::make()
                                ->title('Gagal Mengirim Notifikasi WA')
                                ->danger()
                                ->send();
                        }
                    }),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
