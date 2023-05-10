<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hospital extends Model
{
    use HasFactory;

    protected $table = 'hospitals';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
