<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DtrLog extends Model
{
    // Table name
    protected $table = 'dtr_logs';

    protected $fillable = [
        'user_id',
        'type',
        'recorded_at',
        'work_date'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
