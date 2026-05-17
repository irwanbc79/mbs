<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proposal extends Model
{
    protected $fillable = [
        'lead_id', 'title', 'client_name', 'client_email', 'client_phone',
        'client_company', 'description', 'amount', 'status', 'valid_until',
        'notes', 'created_by',
    ];

    protected $casts = [
        'amount'      => 'decimal:2',
        'valid_until' => 'date',
    ];

    public function lead(): BelongsTo
    {
        return $this->belongsTo(Lead::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
