<?php

namespace App\Filament\Resources\Proposals\Schemas;

use App\Models\Lead;
use App\Models\User;
use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProposalForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Penawaran')
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul Penawaran')
                            ->required()
                            ->columnSpanFull(),
                        Select::make('lead_id')
                            ->label('Lead Terkait')
                            ->options(Lead::pluck('name', 'id'))
                            ->searchable()
                            ->placeholder('Pilih lead (opsional)'),
                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'draft'    => 'Draft',
                                'sent'     => 'Terkirim',
                                'viewed'   => 'Dilihat',
                                'accepted' => 'Diterima',
                                'rejected' => 'Ditolak',
                                'expired'  => 'Expired',
                            ])
                            ->required()
                            ->default('draft'),
                    ]),

                Section::make('Data Klien')
                    ->columns(2)
                    ->schema([
                        TextInput::make('client_name')
                            ->label('Nama Klien')
                            ->required(),
                        TextInput::make('client_company')
                            ->label('Perusahaan'),
                        TextInput::make('client_email')
                            ->label('Email')
                            ->email(),
                        TextInput::make('client_phone')
                            ->label('Telepon')
                            ->tel(),
                    ]),

                Section::make('Detail Harga')
                    ->columns(2)
                    ->schema([
                        TextInput::make('amount')
                            ->label('Nilai Penawaran (Rp)')
                            ->required()
                            ->numeric()
                            ->prefix('Rp')
                            ->default(0),
                        DatePicker::make('valid_until')
                            ->label('Berlaku Hingga'),
                        Select::make('created_by')
                            ->label('Dibuat oleh')
                            ->options(User::pluck('name', 'id'))
                            ->searchable(),
                    ]),

                Section::make('Deskripsi & Catatan')
                    ->schema([
                        Textarea::make('description')
                            ->label('Deskripsi Layanan')
                            ->rows(4)
                            ->columnSpanFull(),
                        Textarea::make('notes')
                            ->label('Catatan Internal')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
