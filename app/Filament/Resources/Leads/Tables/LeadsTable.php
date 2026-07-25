<?php

namespace App\Filament\Resources\Leads\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class LeadsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                TextColumn::make('company')
                    ->label('Perusahaan')
                    ->searchable()
                    ->placeholder('—'),
                TextColumn::make('phone')
                    ->label('Telepon')
                    ->searchable(),
                TextColumn::make('service_interest')
                    ->label('Layanan')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'website'  => 'info',
                        'erp'      => 'warning',
                        'mobile'   => 'success',
                        'chatbot'  => 'primary',
                        'custom'   => 'danger',
                        default    => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'website' => 'Website',
                        'erp'     => 'ERP',
                        'mobile'  => 'Mobile App',
                        'chatbot' => 'Chatbot AI',
                        'custom'  => 'Custom Dev',
                        default   => 'Lainnya',
                    }),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'new'       => 'info',
                        'contacted' => 'warning',
                        'qualified' => 'success',
                        'converted' => 'primary',
                        'lost'      => 'danger',
                        default     => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'new'       => 'Baru',
                        'contacted' => 'Dihubungi',
                        'qualified' => 'Qualified',
                        'converted' => 'Converted',
                        'lost'      => 'Lost',
                        default     => $state,
                    }),
                TextColumn::make('source')
                    ->label('Sumber')
                    ->badge()
                    ->color('gray')
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'website'      => 'Website',
                        'referral'     => 'Referral',
                        'social_media' => 'Social Media',
                        'whatsapp'     => 'WhatsApp',
                        'direct'       => 'Direct',
                        default        => 'Lainnya',
                    }),
                TextColumn::make('assignedUser.name')
                    ->label('PIC')
                    ->placeholder('—'),
                TextColumn::make('created_at')
                    ->label('Masuk')
                    ->date('d M Y')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'new'       => 'Baru',
                        'contacted' => 'Dihubungi',
                        'qualified' => 'Qualified',
                        'converted' => 'Converted',
                        'lost'      => 'Lost',
                    ]),
                SelectFilter::make('service_interest')
                    ->label('Layanan')
                    ->options([
                        'website' => 'Website',
                        'erp'     => 'ERP',
                        'mobile'  => 'Mobile App',
                        'chatbot' => 'Chatbot AI',
                        'custom'  => 'Custom Dev',
                        'other'   => 'Lainnya',
                    ]),
            ])
            ->recordActions([
                \Filament\Tables\Actions\Action::make('jawabAi')
                    ->label('Jawab dengan AI')
                    ->icon('heroicon-o-sparkles')
                    ->color('primary')
                    ->action(function (Lead $record) {
                        $service = new \App\Services\LeadAiResponderService();
                        $res = $service->generateResponse($record);
                        $record->update([
                            'solution_type'  => $res['solution_recommended'] ?? $record->service_interest,
                            'ai_draft_reply' => $res['suggested_reply_wa'] ?? '',
                            'ai_replied_at'  => now(),
                            'status'         => 'contacted',
                        ]);
                        \Filament\Notifications\Notification::make()
                            ->title('AI Response Draft Berhasil Dibuat')
                            ->body('Solusi direkomendasikan: ' . ($res['solution_recommended'] ?? '-'))
                            ->success()
                            ->send();
                    }),
                \Filament\Tables\Actions\Action::make('kirimWa')
                    ->label('Kirim WA')
                    ->icon('heroicon-o-paper-airplane')
                    ->color('success')
                    ->requiresConfirmation()
                    ->visible(fn (Lead $record) => !empty($record->phone) && !empty($record->ai_draft_reply))
                    ->action(function (Lead $record) {
                        $waService = new \App\Services\WhatsAppNotificationService();
                        $sent = $waService->sendMessage($record->phone, $record->ai_draft_reply);
                        if ($sent) {
                            \Filament\Notifications\Notification::make()
                                ->title('Pesan WA Berhasil Terkirim')
                                ->success()
                                ->send();
                        } else {
                            \Filament\Notifications\Notification::make()
                                ->title('Gagal Mengirim WA')
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
