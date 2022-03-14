<?php

namespace App\Models;

use App\Enums\PlayerRoleEnum;
use App\Models\Base\User;
use Database\Factories\PlayerFactory;
use Hashids\Hashids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Relations\BelongsTo;

/**
 * @property string $name
 * @property string $game_id
 * @property int $money
 * @property PlayerRoleEnum $role
 * @property Game $game
 * @method static PlayerFactory factory
 */
class Player extends User
{
    use HasFactory;

    public $fillable = [
        'name',
        'game_id',
        'role',
        'money',
        'removed',
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
