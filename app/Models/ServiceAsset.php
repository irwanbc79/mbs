<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceAsset extends Model
{
    protected $fillable = [
        'customer_id', 'project_id', 'type', 'provider', 'identifier',
        'environment', 'pic_contact_id', 'sla_tier', 'monthly_fee',
        'renewal_date', 'auto_renew', 'credential_ref', 'state',
    ];

    protected $casts = [
        'monthly_fee'  => 'decimal:2',
        'renewal_date' => 'date',
        'auto_renew'   => 'boolean',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function picContact(): BelongsTo
    {
        return $this->belongsTo(CustomerContact::class, 'pic_contact_id');
    }
}
