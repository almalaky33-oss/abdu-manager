<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\DashboardLogo;
use App\Filament\Widgets\EmployeeStats;
use App\Filament\Widgets\QuickLinks;
use App\Filament\Widgets\UpcomingDocuments;
use App\Filament\Widgets\UpcomingResidences;
use Filament\Pages\Dashboard as BaseDashboard;
use Illuminate\Contracts\Support\Htmlable;

class Dashboard extends BaseDashboard
{
    public function getHeading(): string | Htmlable
    {
        return '';
    }

    public function getWidgets(): array
    {
        return [
            DashboardLogo::class,

            QuickLinks::class,

            EmployeeStats::class,

            UpcomingResidences::class,

            UpcomingDocuments::class,
        ];
    }
}
