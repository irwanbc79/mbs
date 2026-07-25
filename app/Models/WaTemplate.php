<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WaTemplate extends Model
{
    protected $fillable = [
        'name', 'code', 'content', 'variables',
    ];

    protected $casts = [
        'variables' => 'array',
    ];
}
