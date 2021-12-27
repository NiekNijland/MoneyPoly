<?php

namespace App\Models\Base;

use Illuminate\Auth\{
    Authenticatable,
    MustVerifyEmail,
    Passwords\CanResetPassword
};
use Illuminate\Contracts\Auth\{
    Access\Authorizable as AuthorizableContract,
    Authenticatable as AuthenticatableContract,
    CanResetPassword as CanResetPasswordContract
};
use Illuminate\Foundation\Auth\Access\Authorizable;

class User extends Model implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, MustVerifyEmail;
}
