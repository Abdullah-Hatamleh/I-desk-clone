<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    /** @use HasFactory<\Database\Factories\TicketFactory> */
    use HasFactory;

    protected $casts = [
        'issues' => 'array',
    ];

    protected $guarded = [];

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }
}
