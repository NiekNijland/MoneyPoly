<?php

namespace App\Dto\Auth;

use Spatie\DataTransferObject\DataTransferObject;

class RequestPasswordResetDto extends DataTransferObject
{
    public string $tenant_id;
    public string $email;
}
