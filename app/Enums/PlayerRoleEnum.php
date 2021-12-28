<?php

namespace App\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Normal()
 * @method static self Banker()
 * @method static self Both()
 */
final class PlayerRoleEnum extends Enum
{
    public static function values(): array
    {
        return [
            'Normal' => 0,
            'Banker' => 1,
            'Both' => 2,
        ];
    }
}
