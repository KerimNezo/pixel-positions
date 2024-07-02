<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Employer extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    //funkcija kojom govorimo projektu da Employer klasa pripada User klasi.

    public function jobs(): HasMany
    {
        return $this->hasMany(Job::class);
    }
}
