<?php

namespace App\Models;

use App\Enums\PlayerRoleEnum;
use App\Models\Base\User;
use Jenssegers\Mongodb\Relations\BelongsTo;

/**
 * @property string $name
 * @property string $game_id
 * @property PlayerRoleEnum $role
 * @property Game $game
 */
class Player extends User
{
    public $fillable = [
        'name',
        'game_id',
        'role',
    ];

    public $casts = [
        'role' => PlayerRoleEnum::class,
    ];

    public function game(): BelongsTo
    {
        return $this->belongsTo(Game::class);
    }
}
