<?php

namespace App\Filament\Widgets;

use App\Models\Employee;
use Filament\Widgets\Widget;

class UpcomingResidences extends Widget
{
    protected string $view = 'filament.widgets.upcoming-residences';

    protected static ?string $heading = '📋 أقرب الإقامات انتهاءً';

    protected static ?int $sort = 1;

    protected int|string|array $columnSpan = 'full';

    public function getViewData(): array
    {
        return [
            'employees' => Employee::query()
                ->orderBy('residence_expiry')
                ->limit(5)
                ->get(),
        ];
    }
}
