<?php

namespace App\Models;

use App\Models\ValidRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gift extends Model
{
    use HasFactory;

    protected $table = 'gifts';

    public function validrequest(): BelongsTo
    {
        return $this->belongsTo(ValidRequest::class);
    }
}
