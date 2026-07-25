<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WaLog extends Model
{
    protected $fillable = [
        'recipient_phone', 'message', 'status', 'response_payload',
    ];
}
