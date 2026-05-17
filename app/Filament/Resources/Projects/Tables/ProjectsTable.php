<?php

namespace App\Filament\Resources\Projects\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ProjectsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Nama Proyek')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                TextColumn::make('client_name')
                    ->label('Klien')
                    ->searchable(),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'planning'  => 'info',
                        'active'    => 'success',
                        'on_hold'   => 'warning',
                        'completed' => 'primary',
                        'cancelled' => 'danger',
                        default     => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'planning'  => 'Perencanaan',
                        'active'    => 'Aktif',
                        'on_hold'   => 'Ditangguhkan',
                        'completed' => 'Selesai',
                        'cancelled' => 'Dibatalkan',
                        default     => $state,
                    }),
                TextColumn::make('progress')
                    ->label('Progress')
                    ->suffix('%')
                    ->sortable(),
                TextColumn::make('budget')
                    ->label('Anggaran')
                    ->money('IDR', locale: 'id')
                    ->sortable(),
                TextColumn::make('start_date')
                    ->label('Mulai')
                    ->date('d M Y')
                    ->sortable(),
                TextColumn::make('end_date')
                    ->label('Selesai')
                    ->date('d M Y')
                    ->sortable()
                    ->placeholder('—'),
                TextColumn::make('assignedUser.name')
                    ->label('PIC')
                    ->placeholder('—'),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'planning'  => 'Perencanaan',
                        'active'    => 'Aktif',
                        'on_hold'   => 'Ditangguhkan',
                        'completed' => 'Selesai',
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
