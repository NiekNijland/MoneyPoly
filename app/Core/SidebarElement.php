<?php

namespace App\Core;

use Exception;
use RuntimeException;

final class SidebarElement
{
    /**
     * @throws Exception
     */
    public function __construct(
        public array  $required_roles,
        public string $iconPath,
        public string $tooltip,
        public ?WorkspaceElement $workspaceElement = null,
        public ?string $route = null,
        public array $subRoutes = [],
    ) {
        if ($this->workspaceElement === null && $this->route === null) {
            throw new RuntimeException('invalid SidebarElement');
        }
    }

    public function shouldHighlight(string $route): bool
    {
        return $this->route === $route || in_array($route, $this->subRoutes, true);
    }
}
