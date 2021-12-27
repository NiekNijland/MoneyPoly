<?php

namespace App\Dto\Auth;

use App\Models\Employee\PasswordResetToken;
use Spatie\DataTransferObject\DataTransferObject;

class ResetPasswordDto extends DataTransferObject
{
    public PasswordResetToken $token;
    public string $password;
}
