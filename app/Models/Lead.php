<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lead extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'company',
        'service_interest', 'status', 'source', 'notes', 'assigned_to',
    ];

    public function assignedUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function proposals(): HasMany
    {
        return $this->hasMany(Proposal::class);
    }
}
