<?php

namespace App\Dto\Auth;

use Spatie\DataTransferObject\DataTransferObject;

class AuthenticateDto extends DataTransferObject
{
    public string $ip;
    public string $email;
    public string $password;
    public bool $remember;
    public string $tenant_id;
}
