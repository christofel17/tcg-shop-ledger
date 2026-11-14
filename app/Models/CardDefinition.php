<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CardDefinition extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $guarded = [
        'id',
        'set_id',
        'set_number',
        'slug',
        'name',
        'supertype',
        'subtypes',
        'hp',
        'type',
        'rarity',
        'pokedex_number',
        'unlimited',
        'standard',
        'expanded',
        'regulation_mark',
        'image_small',
        'image_large',
    ];

    public function cards(): HasMany
    {
        return $this->hasMany(Card::class);
    }

    public function set(): BelongsTo
    {
        return $this->belongsTo(Set::class);
    }
}
