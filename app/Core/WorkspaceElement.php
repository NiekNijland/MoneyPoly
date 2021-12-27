<?php

namespace App\Core;

use App\Enums\Menu\WorkspaceElementTypeEnum;
use Illuminate\Support\Str;

class WorkspaceElement
{
    public string $id;
    final public function __construct(public WorkspaceElementTypeEnum $typeEnum)
    {
        $this->id = Str::random(4);
    }
}
