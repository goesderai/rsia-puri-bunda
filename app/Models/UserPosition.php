<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserPosition extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'position_id',
    ];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
