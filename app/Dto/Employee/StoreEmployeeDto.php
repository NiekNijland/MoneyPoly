<?php

namespace App\Dto\Employee;

use App\Enums\{EmployeeRoleEnum, EmployeeTypeEnum};
use App\Models\Employee\Employee;
use Spatie\DataTransferObject\DataTransferObject;

class StoreEmployeeDto extends DataTransferObject
{
    public ?string $azure_id;
    public string $tenant_id;
    public string $first_name;
    public string $last_name;
    public ?string $job_title;
    public string $email;
    public EmployeeRoleEnum $role;
    public EmployeeTypeEnum $type;
    public string $avatar_path = Employee::DEFAULT_AVATAR_PATH;
    public ?array $azure_values;
}
