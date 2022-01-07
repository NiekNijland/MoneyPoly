<?php

namespace App\Models;

use App\Enums\GameStatus;
use App\Models\Base\Model;
use Jenssegers\Mongodb\Relations\{EmbedsOne, HasMany};

/**
 * @property string $name
 * @property string $token
 * @property int $free_parking_money
 * @property GameStatus $status
 * @property GameSettings $settings
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

    public function settings(): EmbedsOne
    {
        return $this->embedsOne(GameSettings::class);
    }
}
