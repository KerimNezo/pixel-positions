<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    use HasFactory;

    public function tag() 
    {

    }

    public function tags() 
    {
        return [];
    }

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
}
