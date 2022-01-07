<?php

namespace App\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Standard()
 * @method static self SpeedDie()
 * @method static self Custom()
 */
final class GameSettingsType extends Enum
{
    protected static function values(): array
    {
        return [
            'Standard' => 0,
            'SpeedDie' => 1,
            'Custom' => 2,
        ];
    }
}
