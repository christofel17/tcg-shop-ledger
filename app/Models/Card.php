<?php

namespace App\Models;

use App\Enums\CardCondition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Card extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'card_definition_id',
        'condition',
        'price',
        'language',
    ];

    protected $casts = [
        'condition' => CardCondition::class,
    ];

    public function cardDefinition(): BelongsTo
    {
        return $this->belongsTo(CardDefinition::class);
    }
}
