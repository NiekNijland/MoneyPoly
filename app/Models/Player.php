<?php

namespace App\Models;

use App\Enums\PlayerRoleEnum;
use App\Models\Base\User;
use Hashids\Hashids;
use Jenssegers\Mongodb\Relations\BelongsTo;

/**
 * @property string $name
 * @property string $game_id
 * @property int $money
 * @property PlayerRoleEnum $role
 * @property Game $game
 */
class Player extends User
{
    public $fillable = [
        'name',
        'game_id',
        'role',
        'money',
    ];

    public $casts = [
        'role' => PlayerRoleEnum::class,
    ];

    public function game(): BelongsTo
    {
        return $this->belongsTo(Game::class);
    }

    public function getRouteKey(): string
    {
        return (new Hashids())->encodeHex($this->id);
    }
}
