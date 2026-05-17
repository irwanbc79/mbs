<?php

namespace App\Filament\Resources\Invoices\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class InvoicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('invoice_number')
                    ->label('No. Invoice')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->copyable(),
                TextColumn::make('client_name')
                    ->label('Klien')
                    ->searchable(),
                TextColumn::make('total')
                    ->label('Total')
                    ->money('IDR', locale: 'id')
                    ->sortable(),
                TextColumn::make('paid_amount')
                    ->label('Dibayar')
                    ->money('IDR', locale: 'id')
                    ->sortable(),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'draft'     => 'gray',
                        'sent'      => 'info',
                        'partial'   => 'warning',
                        'paid'      => 'success',
                        'overdue'   => 'danger',
                        'cancelled' => 'danger',
                        default     => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'draft'     => 'Draft',
                        'sent'      => 'Terkirim',
                        'partial'   => 'Bayar Sebagian',
                        'paid'      => 'Lunas',
                        'overdue'   => 'Jatuh Tempo',
                        'cancelled' => 'Dibatalkan',
                        default     => $state,
                    }),
                TextColumn::make('issued_date')
                    ->label('Tgl Invoice')
                    ->date('d M Y')
                    ->sortable(),
                TextColumn::make('due_date')
                    ->label('Jatuh Tempo')
                    ->date('d M Y')
                    ->sortable()
                    ->placeholder('—'),
                TextColumn::make('creator.name')
                    ->label('Dibuat oleh')
                    ->placeholder('—')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'draft'     => 'Draft',
                        'sent'      => 'Terkirim',
                        'partial'   => 'Bayar Sebagian',
                        'paid'      => 'Lunas',
                        'overdue'   => 'Jatuh Tempo',
                        'cancelled' => 'Dibatalkan',
                    ]),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
