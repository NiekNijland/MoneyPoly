<?php

namespace App\Models;

use App\Models\Base\User;
use Jenssegers\Mongodb\Relations\BelongsTo;

/**
 * @property string $name
 * @property string $game_id
 * @property Game $game
 */
class Player extends User
{
    public $fillable = [
        'name',
        'game_id',
    ];

    public function game(): BelongsTo
    {
        return $this->belongsTo(Game::class);
    }
}
