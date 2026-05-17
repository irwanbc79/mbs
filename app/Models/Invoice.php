<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Invoice extends Model
{
    protected $fillable = [
        'project_id', 'proposal_id', 'invoice_number',
        'client_name', 'client_email', 'client_phone', 'client_company',
        'issued_date', 'due_date',
        'subtotal', 'tax_percent', 'tax_amount', 'total', 'paid_amount',
        'status', 'notes', 'created_by',
    ];

    protected $casts = [
        'issued_date' => 'date',
        'due_date'    => 'date',
        'subtotal'    => 'decimal:2',
        'tax_percent' => 'decimal:2',
        'tax_amount'  => 'decimal:2',
        'total'       => 'decimal:2',
        'paid_amount' => 'decimal:2',
    ];

    protected static function booted(): void
    {
        static::creating(function (Invoice $invoice) {
            if (empty($invoice->invoice_number)) {
                $invoice->invoice_number = 'INV-' . date('Ymd') . '-' . str_pad(
                    static::whereDate('created_at', today())->count() + 1,
                    3, '0', STR_PAD_LEFT
                );
            }
        });
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function proposal(): BelongsTo
    {
        return $this->belongsTo(Proposal::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function getRemainingAttribute(): float
    {
        return (float) $this->total - (float) $this->paid_amount;
    }
}
