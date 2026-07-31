<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class QuickStats extends StatsOverviewWidget
{
    protected int|string|array $columnSpan = 'full';

    protected function getStats(): array
    {
        return [
            Stat::make('العمال', '')
                ->description('فتح قائمة العمال')
                ->descriptionIcon('heroicon-o-users')
                ->color('warning')
                ->url(route('filament.admin.resources.employees.index'))
                ->extraAttributes([
                    'class' => 'cursor-pointer hover:scale-[1.02] transition',
                ]),

            Stat::make('الوثائق', '')
                ->description('فتح قائمة الوثائق')
                ->descriptionIcon('heroicon-o-document-text')
                ->color('success')
                ->url(route('filament.admin.resources.documents.index'))
                ->extraAttributes([
                    'class' => 'cursor-pointer hover:scale-[1.02] transition',
                ]),
        ];
    }
}
