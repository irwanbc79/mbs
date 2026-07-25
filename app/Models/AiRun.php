<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AiRun extends Model
{
    protected $fillable = [
        'feature', 'model', 'prompt_hash', 'input_tokens', 'output_tokens',
        'cost', 'latency_ms', 'output', 'approved_by', 'edited',
    ];

    protected $casts = [
        'output' => 'array',
        'cost'   => 'decimal:6',
        'edited' => 'boolean',
    ];

    public function approver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}
