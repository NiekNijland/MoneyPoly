<?php

namespace App\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Waiting()
 * @method static self Active()
 * @method static self Closed()
 */
final class GameStatus extends Enum
{
    public static function values(): array
    {
        return [
            'Waiting' => 0,
            'Active' => 1,
            'Closed' => 2,
        ];
    }
}
