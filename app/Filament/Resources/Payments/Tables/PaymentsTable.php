<?php

namespace App\Filament\Resources\Payments\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class PaymentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('invoice.invoice_number')
                    ->label('No. Invoice')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                TextColumn::make('invoice.client_name')
                    ->label('Klien')
                    ->searchable(),
                TextColumn::make('amount')
                    ->label('Jumlah')
                    ->money('IDR', locale: 'id')
                    ->sortable(),
                TextColumn::make('method')
                    ->label('Metode')
                    ->badge()
                    ->color('info')
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'transfer' => 'Transfer Bank',
                        'cash'     => 'Tunai',
                        'qris'     => 'QRIS',
                        'check'    => 'Cek/Giro',
                        default    => 'Lainnya',
                    }),
                TextColumn::make('payment_date')
                    ->label('Tgl Bayar')
                    ->date('d M Y')
                    ->sortable(),
                TextColumn::make('reference_number')
                    ->label('Referensi')
                    ->placeholder('—')
                    ->copyable(),
                TextColumn::make('recorder.name')
                    ->label('Dicatat oleh')
                    ->placeholder('—'),
            ])
            ->defaultSort('payment_date', 'desc')
            ->filters([
                SelectFilter::make('method')
                    ->label('Metode')
                    ->options([
                        'transfer' => 'Transfer Bank',
                        'cash'     => 'Tunai',
                        'qris'     => 'QRIS',
                        'check'    => 'Cek/Giro',
                        'other'    => 'Lainnya',
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
