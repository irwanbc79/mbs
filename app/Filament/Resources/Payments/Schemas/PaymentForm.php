<?php

namespace App\Filament\Resources\Payments\Schemas;

use App\Models\Invoice;
use App\Models\User;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PaymentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Detail Pembayaran')
                    ->columns(2)
                    ->schema([
                        Select::make('invoice_id')
                            ->label('Invoice')
                            ->options(Invoice::where('status', '!=', 'paid')
                                ->get()
                                ->mapWithKeys(fn ($inv) => [$inv->id => $inv->invoice_number . ' — ' . $inv->client_name]))
                            ->searchable()
                            ->required(),
                        DatePicker::make('payment_date')
                            ->label('Tanggal Bayar')
                            ->required()
                            ->default(today()),
                        TextInput::make('amount')
                            ->label('Jumlah Dibayar (Rp)')
                            ->numeric()
                            ->prefix('Rp')
                            ->required(),
                        Select::make('method')
                            ->label('Metode Bayar')
                            ->options([
                                'transfer' => 'Transfer Bank',
                                'cash'     => 'Tunai',
                                'qris'     => 'QRIS',
                                'check'    => 'Cek/Giro',
                                'other'    => 'Lainnya',
                            ])
                            ->required()
                            ->default('transfer'),
                        TextInput::make('reference_number')
                            ->label('No. Referensi / Bukti Transfer')
                            ->columnSpanFull(),
                        Select::make('recorded_by')
                            ->label('Dicatat oleh')
                            ->options(User::pluck('name', 'id'))
                            ->searchable(),
                        Textarea::make('notes')
                            ->label('Catatan')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
