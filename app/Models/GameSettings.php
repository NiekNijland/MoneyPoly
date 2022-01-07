<?php

namespace App\Models;

use App\Enums\GameSettingsType;
use App\Models\Base\Model;
use Database\Factories\GameSettingsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property GameSettingsType $type
 * @property int $player_starting_money
 * @property int $start_passing_bonus
 * @method static GameSettingsFactory factory()
 */
class GameSettings extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'player_starting_money',
        'start_passing_bonus',
    ];

    protected $casts = [
        'type' => GameSettingsType::class,
    ];
}
