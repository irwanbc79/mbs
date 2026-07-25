<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectCost extends Model
{
    protected $fillable = [
        'project_id', 'type', 'amount', 'incurred_on', 'note',
    ];

    protected $casts = [
        'amount'      => 'decimal:2',
        'incurred_on' => 'date',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
