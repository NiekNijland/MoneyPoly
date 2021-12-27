<?php

namespace App\Services;

use App\Core\SidebarElement;
use App\Enums\EmployeeRoleEnum;
use Illuminate\Support\Facades\Auth;
use Exception;

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
                required_role: EmployeeRoleEnum::None(),
                iconPath: 'icons/duotune/general/gen032.svg',
                tooltip: __('sidebar.dashboard'),
                route: 'dashboard',
            ),
            new SidebarElement(
                required_role: EmployeeRoleEnum::None(),
                iconPath: 'icons/duotune/general/gen013.svg',
                tooltip: __('booking.bookings'),
                route: 'booking',
            ),
            new SidebarElement(
                required_role: EmployeeRoleEnum::ProjectManager(),
                iconPath: 'icons/duotune/communication/com014.svg',
                tooltip: __('employee.employees'),
                route: 'employee',
                subRoutes: [
                    'employee.manage',
                ]
            ),
            new SidebarElement(
                required_role: EmployeeRoleEnum::ProjectManager(),
                iconPath: 'icons/duotune/general/gen043.svg',
                tooltip: __('activity.activities'),
                route: 'activity',
                subRoutes: [],
            ),
            new SidebarElement(
                required_role: EmployeeRoleEnum::ProjectManager(),
                iconPath: 'icons/duotune/general/gen009.svg',
                tooltip: __('project.projects'),
                route: 'project',
                subRoutes: [
                    'project.manage',
                ],
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
            if (($element->required_role !== EmployeeRoleEnum::None()) && Auth::check() && $element->required_role !== Auth::user()->role) {
                continue;
            }

            if ($element->workspaceElement !== null && !$this->showToggle()) {
                throw new Exception('Workspace items not allowed when toggle is disabled');
            }

            $filteredSidebar[] = $element;
        }
        return $filteredSidebar;
    }
}
