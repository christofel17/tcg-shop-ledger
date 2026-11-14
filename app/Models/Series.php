<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Series extends Model
{
    protected $guarded = [
        'id',
        'name',
    ];

    public function sets(): HasMany
    {
        return $this->hasMany(Set::class);
    }
}
