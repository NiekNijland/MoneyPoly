<?php

namespace App\Services;

use App\Core\SidebarElement;
use App\Enums\PlayerRoleEnum;
use Illuminate\Support\Facades\Auth;
use Exception;
use RuntimeException;

final class SidebarService
{
    public function defaultMinimized(): bool
    {
        return config('sidebar.default_minimized');
    }

    public function showToggle(): bool
    {
        return config('sidebar.show_toggle');
    }

    /**
     * @throws Exception
     */
    public function getSidebarElements(): array
    {
        $sidebar = [
            new SidebarElement(
                required_roles: [PlayerRoleEnum::Normal(), PlayerRoleEnum::Both()],
                iconPath: 'icons/duotune/finance/fin008.svg',
                tooltip: __('player.player'),
                route: 'dashboard',
            ),
            new SidebarElement(
                required_roles: [PlayerRoleEnum::Normal(), PlayerRoleEnum::Both()],
                iconPath: 'icons/duotune/finance/fin001.svg',
                tooltip: __('game.bank'),
                route: 'bank',
            ),
        ];

        return $this->applyPermissionFilter($sidebar);
    }

    /**
     * @throws Exception
     */
    private function applyPermissionFilter(array $sidebar): array
    {
        $filteredSidebar = [];

        foreach ($sidebar as $element) {
            $values = array_map(static fn ($role) => $role->value, $element->required_roles);
            if (!in_array(Auth::user()->role->value, $values, true)) {
                continue;
            }

            $filteredSidebar[] = $element;
        }

        return $filteredSidebar;
    }
}
