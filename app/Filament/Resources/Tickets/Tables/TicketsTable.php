<?php

namespace App\Filament\Resources\Tickets\Tables;

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
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
