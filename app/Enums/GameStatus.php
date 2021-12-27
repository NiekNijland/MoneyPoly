<?php

namespace App\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Active()
 * @method static self Closed()
 */
final class GameStatus extends Enum
{
    public static function values(): array
    {
        return [
            'Active' => 1,
            'Closed' => 0,
        ];
    }
}
