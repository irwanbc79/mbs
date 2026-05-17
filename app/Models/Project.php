<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    protected $fillable = [
        'proposal_id', 'title', 'client_name', 'client_email', 'client_phone',
        'description', 'budget', 'status', 'progress', 'start_date', 'end_date',
        'assigned_to',
    ];

    protected $casts = [
        'budget'     => 'decimal:2',
        'start_date' => 'date',
        'end_date'   => 'date',
    ];

    public function proposal(): BelongsTo
    {
        return $this->belongsTo(Proposal::class);
    }

    public function assignedUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
}
