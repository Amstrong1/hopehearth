<?php

namespace App\Models;

use App\Models\ValidRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RequestList extends Model
{
    use HasFactory;

    protected $table = 'requests';

    public function valid_request(): HasOne
    {
        return $this->hasOne(ValidRequest::class);
    }

    public function hospital(): BelongsTo
    {
        return $this->belongsTo(Hospital::class);
    }

    public function gifts(): HasMany
    {
        return $this->hasMany(Gift::class);
    }
}
