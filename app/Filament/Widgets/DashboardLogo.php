<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class DashboardLogo extends Widget
{
    protected string $view = 'filament.widgets.dashboard-logo';

    protected int|string|array $columnSpan = 'full';

    protected static bool $isLazy = false;
}
