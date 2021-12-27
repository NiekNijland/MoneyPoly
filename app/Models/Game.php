<?php

namespace App\Models;

use App\Enums\GameStatus;
use App\Models\Base\Model;
use Jenssegers\Mongodb\Relations\{HasMany};

/**
 * @property string $name
 * @property string $token
 * @property GameStatus $status
 */
final class Game extends Model
{
    protected $fillable = [
        'name',
        'token',
        'status',
    ];

    public $casts = [
        'status' => GameStatus::class,
    ];

    public function players(): HasMany
    {
        return $this->hasMany(Player::class);
    }
}
