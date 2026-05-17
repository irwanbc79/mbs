<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    protected $fillable = [
        'ticket_number', 'project_id',
        'client_name', 'client_email', 'client_phone',
        'title', 'description', 'priority', 'status', 'category',
        'assigned_to', 'resolved_at', 'notes',
    ];

    protected $casts = [
        'resolved_at' => 'datetime',
    ];

    protected static function booted(): void
    {
        static::creating(function (Ticket $ticket) {
            if (empty($ticket->ticket_number)) {
                $ticket->ticket_number = 'TKT-' . date('Ymd') . '-' . str_pad(
                    static::whereDate('created_at', today())->count() + 1,
                    3, '0', STR_PAD_LEFT
                );
            }
        });

        static::saving(function (Ticket $ticket) {
            if (in_array($ticket->status, ['resolved', 'closed']) && ! $ticket->resolved_at) {
                $ticket->resolved_at = now();
            }
        });
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function assignedUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
}
