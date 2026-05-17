<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    protected $fillable = [
        'invoice_id', 'amount', 'payment_date', 'method',
        'reference_number', 'notes', 'recorded_by',
    ];

    protected $casts = [
        'amount'       => 'decimal:2',
        'payment_date' => 'date',
    ];

    protected static function booted(): void
    {
        static::saved(function (Payment $payment) {
            $payment->updateInvoicePaidAmount();
        });

        static::deleted(function (Payment $payment) {
            $payment->updateInvoicePaidAmount();
        });
    }

    protected function updateInvoicePaidAmount(): void
    {
        $invoice = $this->invoice;
        $paid = $invoice->payments()->sum('amount');
        $invoice->paid_amount = $paid;
        $invoice->status = match (true) {
            $paid <= 0               => 'sent',
            $paid < $invoice->total  => 'partial',
            default                  => 'paid',
        };
        $invoice->saveQuietly();
    }

    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }

    public function recorder(): BelongsTo
    {
        return $this->belongsTo(User::class, 'recorded_by');
    }
}
