<?php

namespace App\Filament\Resources\Invoices\Schemas;

use App\Models\Project;
use App\Models\Proposal;
use App\Models\User;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class InvoiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Invoice')
                    ->columns(2)
                    ->schema([
                        TextInput::make('invoice_number')
                            ->label('No. Invoice')
                            ->placeholder('Auto-generated jika kosong')
                            ->unique(ignoreRecord: true),
                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'draft'     => 'Draft',
                                'sent'      => 'Terkirim',
                                'partial'   => 'Bayar Sebagian',
                                'paid'      => 'Lunas',
                                'overdue'   => 'Jatuh Tempo',
                                'cancelled' => 'Dibatalkan',
                            ])
                            ->required()
                            ->default('draft'),
                        DatePicker::make('issued_date')
                            ->label('Tanggal Invoice')
                            ->required()
                            ->default(today()),
                        DatePicker::make('due_date')
                            ->label('Jatuh Tempo'),
                    ]),

                Section::make('Referensi')
                    ->columns(2)
                    ->schema([
                        Select::make('project_id')
                            ->label('Proyek')
                            ->options(Project::pluck('title', 'id'))
                            ->searchable()
                            ->placeholder('Pilih proyek (opsional)'),
                        Select::make('proposal_id')
                            ->label('Penawaran')
                            ->options(Proposal::pluck('title', 'id'))
                            ->searchable()
                            ->placeholder('Pilih penawaran (opsional)'),
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

                Section::make('Rincian Tagihan')
                    ->columns(3)
                    ->schema([
                        TextInput::make('subtotal')
                            ->label('Subtotal (Rp)')
                            ->numeric()
                            ->prefix('Rp')
                            ->default(0)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function ($state, callable $set, callable $get) {
                                $tax = ($state * $get('tax_percent')) / 100;
                                $set('tax_amount', round($tax));
                                $set('total', round($state + $tax));
                            }),
                        TextInput::make('tax_percent')
                            ->label('PPN (%)')
                            ->numeric()
                            ->suffix('%')
                            ->default(0)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function ($state, callable $set, callable $get) {
                                $tax = ($get('subtotal') * $state) / 100;
                                $set('tax_amount', round($tax));
                                $set('total', round($get('subtotal') + $tax));
                            }),
                        TextInput::make('tax_amount')
                            ->label('Jumlah PPN (Rp)')
                            ->numeric()
                            ->prefix('Rp')
                            ->default(0)
                            ->readOnly(),
                        TextInput::make('total')
                            ->label('Total (Rp)')
                            ->numeric()
                            ->prefix('Rp')
                            ->default(0)
                            ->readOnly(),
                        TextInput::make('paid_amount')
                            ->label('Sudah Dibayar (Rp)')
                            ->numeric()
                            ->prefix('Rp')
                            ->default(0)
                            ->readOnly(),
                        Select::make('created_by')
                            ->label('Dibuat oleh')
                            ->options(User::pluck('name', 'id'))
                            ->searchable(),
                    ]),

                Section::make('Catatan')
                    ->schema([
                        Textarea::make('notes')
                            ->label('Catatan')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
