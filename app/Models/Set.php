<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    protected $guarded = [
        'id',
        'slug',
        'name',
        'series',
        'printed_total',
        'total',
        'legalities',
        'ptcgo_code',
        'release_date',
        'json_updated_at',
        'images'
    ];

    public function cards(): HasMany
    {
        return $this->hasMany(Card::class);
    }

    public function series(): BelongsTo
    {
        return $this->belongsTo(Series::class);
    }
}
