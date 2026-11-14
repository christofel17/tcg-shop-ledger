<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $guarded = [
        'id',
        'name'
    ];

    public function sets(): HasMany
    {
        return $this->hasMany(Set::class);
    }
}
