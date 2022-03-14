<?php

namespace App\Models;

use App\Enums\GameStatusEnum;
use App\Models\Base\Model;
use Database\Factories\GameFactory;
use Jenssegers\Mongodb\Relations\{EmbedsOne, HasMany};
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property string $name
 * @property string $token
 * @property int $free_parking_money
 * @property GameStatusEnum $status
 * @property GameSettings $settings
 * @method static GameFactory factory
 */
final class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'token',
        'status',
        'free_parking_money',
    ];

    public $casts = [
        'status' => GameStatusEnum::class,
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
