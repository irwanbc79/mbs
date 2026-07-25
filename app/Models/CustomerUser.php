<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomerUser extends Authenticatable
{
    use Notifiable;

    protected $table = 'customer_users';

    protected $fillable = [
        'customer_id', 'contact_id', 'email', 'password', 'last_login_at', 'state',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'last_login_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function contact(): BelongsTo
    {
        return $this->belongsTo(CustomerContact::class);
    }
}
