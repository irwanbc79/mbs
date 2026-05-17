<?php

namespace App\Filament\Resources\Proposals\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ProposalsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                TextColumn::make('client_name')
                    ->label('Klien')
                    ->searchable(),
                TextColumn::make('amount')
                    ->label('Nilai')
                    ->money('IDR', locale: 'id')
                    ->sortable(),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'draft'    => 'gray',
                        'sent'     => 'info',
                        'viewed'   => 'warning',
                        'accepted' => 'success',
                        'rejected' => 'danger',
                        'expired'  => 'danger',
                        default    => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'draft'    => 'Draft',
                        'sent'     => 'Terkirim',
                        'viewed'   => 'Dilihat',
                        'accepted' => 'Diterima',
                        'rejected' => 'Ditolak',
                        'expired'  => 'Expired',
                        default    => $state,
                    }),
                TextColumn::make('valid_until')
                    ->label('Berlaku Hingga')
                    ->date('d M Y')
                    ->sortable(),
                TextColumn::make('creator.name')
                    ->label('Dibuat oleh')
                    ->placeholder('—'),
                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->date('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'draft'    => 'Draft',
                        'sent'     => 'Terkirim',
                        'viewed'   => 'Dilihat',
                        'accepted' => 'Diterima',
                        'rejected' => 'Ditolak',
                        'expired'  => 'Expired',
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
