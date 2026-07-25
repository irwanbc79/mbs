<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    protected $fillable = [
        'name', 'legal_name', 'npwp', 'type', 'industry', 'state',
    ];

    public function contacts(): HasMany
    {
        return $this->hasMany(CustomerContact::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(CustomerUser::class);
    }

    public function serviceAssets(): HasMany
    {
        return $this->hasMany(ServiceAsset::class);
    }
}
