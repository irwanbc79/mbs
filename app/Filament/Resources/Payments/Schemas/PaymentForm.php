<?php

namespace App\Filament\Resources\Payments\Schemas;

use App\Models\Invoice;
use App\Models\User;
use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Components\Section;
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
                            ->options(function () {
                                if (!\Illuminate\Support\Facades\Schema::hasTable('invoices')) {
                                    return [];
                                }
                                $query = Invoice::query();
                                if (\Illuminate\Support\Facades\Schema::hasColumn('invoices', 'status')) {
                                    $query->where('status', '!=', 'paid');
                                }
                                return $query->get()->mapWithKeys(function ($inv) {
                                    $number = $inv->invoice_number ?? $inv->number ?? ('INV-' . $inv->id);
                                    $client = $inv->client_name ?? ('Klien #' . ($inv->customer_id ?? $inv->id));
                                    return [$inv->id => $number . ' — ' . $client];
                                });
                            })
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
