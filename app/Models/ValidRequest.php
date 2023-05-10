<?php

namespace App\Models;

use App\Models\Gift;
use App\Models\RequestList;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ValidRequest extends Model
{
    use HasFactory;
    protected $table = 'validrequests';

    public function request_list(): BelongsTo
    {
        return $this->belongsTo(RequestList::class);
    }

    public function gifts(): HasMany
    {
        return $this->hasMany(Gift::class);
    }
}
