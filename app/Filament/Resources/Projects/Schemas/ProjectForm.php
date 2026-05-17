<?php

namespace App\Filament\Resources\Projects\Schemas;

use App\Models\Proposal;
use App\Models\User;
use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Proyek')
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->label('Nama Proyek')
                            ->required()
                            ->columnSpanFull(),
                        Select::make('proposal_id')
                            ->label('Penawaran Terkait')
                            ->options(Proposal::pluck('title', 'id'))
                            ->searchable()
                            ->placeholder('Pilih penawaran (opsional)'),
                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'planning'  => 'Perencanaan',
                                'active'    => 'Aktif',
                                'on_hold'   => 'Ditangguhkan',
                                'completed' => 'Selesai',
                                'cancelled' => 'Dibatalkan',
                            ])
                            ->required()
                            ->default('planning'),
                    ]),

                Section::make('Data Klien')
                    ->columns(2)
                    ->schema([
                        TextInput::make('client_name')
                            ->label('Nama Klien')
                            ->required(),
                        TextInput::make('client_email')
                            ->label('Email Klien')
                            ->email(),
                        TextInput::make('client_phone')
                            ->label('Telepon Klien')
                            ->tel(),
                    ]),

                Section::make('Timeline & Anggaran')
                    ->columns(3)
                    ->schema([
                        DatePicker::make('start_date')
                            ->label('Tanggal Mulai'),
                        DatePicker::make('end_date')
                            ->label('Tanggal Selesai'),
                        TextInput::make('budget')
                            ->label('Anggaran (Rp)')
                            ->numeric()
                            ->prefix('Rp')
                            ->default(0),
                        TextInput::make('progress')
                            ->label('Progress (%)')
                            ->numeric()
                            ->minValue(0)
                            ->maxValue(100)
                            ->suffix('%')
                            ->default(0),
                        Select::make('assigned_to')
                            ->label('PIC')
                            ->options(User::pluck('name', 'id'))
                            ->searchable(),
                    ]),

                Section::make('Deskripsi')
                    ->schema([
                        Textarea::make('description')
                            ->label('Deskripsi Proyek')
                            ->rows(4)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
