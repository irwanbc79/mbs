<?php

namespace App\Filament\Resources\Tickets\Schemas;

use App\Models\Project;
use App\Models\User;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TicketForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Tiket')
                    ->columns(2)
                    ->schema([
                        TextInput::make('ticket_number')
                            ->label('No. Tiket')
                            ->placeholder('Auto-generated jika kosong')
                            ->unique(ignoreRecord: true),
                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'open'        => 'Open',
                                'in_progress' => 'In Progress',
                                'waiting'     => 'Waiting',
                                'resolved'    => 'Resolved',
                                'closed'      => 'Closed',
                            ])
                            ->required()
                            ->default('open'),
                        Select::make('priority')
                            ->label('Prioritas')
                            ->options([
                                'low'    => 'Low',
                                'medium' => 'Medium',
                                'high'   => 'High',
                                'urgent' => 'Urgent',
                            ])
                            ->required()
                            ->default('medium'),
                        Select::make('category')
                            ->label('Kategori')
                            ->options([
                                'bug'         => 'Bug / Error',
                                'feature'     => 'Permintaan Fitur',
                                'question'    => 'Pertanyaan',
                                'maintenance' => 'Maintenance',
                                'other'       => 'Lainnya',
                            ])
                            ->required()
                            ->default('other'),
                    ]),

                Section::make('Detail Masalah')
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul Masalah')
                            ->required()
                            ->columnSpanFull(),
                        Textarea::make('description')
                            ->label('Deskripsi Detail')
                            ->required()
                            ->rows(5)
                            ->columnSpanFull(),
                    ]),

                Section::make('Data Klien & Penugasan')
                    ->columns(2)
                    ->schema([
                        TextInput::make('client_name')
                            ->label('Nama Klien')
                            ->required(),
                        TextInput::make('client_email')
                            ->label('Email')
                            ->email(),
                        TextInput::make('client_phone')
                            ->label('Telepon')
                            ->tel(),
                        Select::make('project_id')
                            ->label('Proyek Terkait')
                            ->options(Project::pluck('title', 'id'))
                            ->searchable()
                            ->placeholder('Pilih proyek (opsional)'),
                        Select::make('assigned_to')
                            ->label('Ditugaskan ke')
                            ->options(User::pluck('name', 'id'))
                            ->searchable()
                            ->placeholder('Pilih PIC'),
                        Textarea::make('notes')
                            ->label('Catatan Internal')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
