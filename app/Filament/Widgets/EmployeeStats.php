<?php

namespace App\Filament\Widgets;

use App\Models\Employee;
use Carbon\Carbon;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class EmployeeStats extends StatsOverviewWidget
{
    protected ?string $heading = null;

    protected function getStats(): array
    {
        $today = Carbon::today();

        return [

            Stat::make('إجمالي العمال', Employee::count())
                ->description('عدد جميع العمال')
                ->descriptionIcon(Heroicon::OutlinedUsers)
                ->icon(Heroicon::OutlinedUsers)
                ->color('primary'),

            Stat::make(
                'الإقامات السارية',
                Employee::whereDate('residence_expiry', '>', $today)->count()
            )
                ->description('صالحة حتى الآن')
                ->descriptionIcon(Heroicon::OutlinedCheckCircle)
                ->icon(Heroicon::OutlinedCheckCircle)
                ->color('success'),

            Stat::make(
                'تنتهي خلال 30 يوم',
                Employee::whereBetween('residence_expiry', [
                    $today,
                    $today->copy()->addDays(30),
                ])->count()
            )
                ->description('تحتاج متابعة')
                ->descriptionIcon(Heroicon::OutlinedExclamationTriangle)
                ->icon(Heroicon::OutlinedExclamationTriangle)
                ->color('warning'),

            Stat::make(
                'الإقامات المنتهية',
                Employee::whereDate('residence_expiry', '<', $today)->count()
            )
                ->description('تتطلب تجديدًا')
                ->descriptionIcon(Heroicon::OutlinedXCircle)
                ->icon(Heroicon::OutlinedXCircle)
                ->color('danger'),
        ];
    }
}
