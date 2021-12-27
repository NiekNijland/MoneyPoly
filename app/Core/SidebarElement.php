<?php

namespace App\Core;

use App\Enums\EmployeeRoleEnum;
use Exception;

class SidebarElement
{
    /**
     * @throws Exception
     */
    final public function __construct(
        public EmployeeRoleEnum  $required_role,
        public string $iconPath,
        public string $tooltip,
        public ?WorkspaceElement $workspaceElement = null,
        public ?string $route = null,
        public array $subRoutes = [],
    ) {
        if ($this->workspaceElement === null && $this->route === null) {
            throw new Exception('invalid SidebarElement');
        }
    }

    final public function shouldHighlight(string $route): bool
    {
        return $this->route === $route || in_array($route, $this->subRoutes, true);
    }
}
