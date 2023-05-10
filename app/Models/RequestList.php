<?php

namespace App\Models;

use App\Models\ValidRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RequestList extends Model
{
    use HasFactory;

    protected $table = 'requests';

    public function valid_request(): HasOne
    {
        return $this->hasOne(ValidRequest::class);
    }
}
