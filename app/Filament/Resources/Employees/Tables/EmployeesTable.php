<?php

namespace App\Filament\Resources\Employees\Tables;

use Carbon\Carbon;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EmployeesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('الاسم')
                    ->searchable(),

                TextColumn::make('nationality')
                    ->label('الجنسية')
                    ->searchable(),

                TextColumn::make('job_title')
                    ->label('المسمى الوظيفي')
                    ->searchable(),

                TextColumn::make('salary')
                    ->label('الراتب')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('passport_expiry')
                    ->label('انتهاء الجواز')
                    ->date()
                    ->sortable(),

                TextColumn::make('residence_expiry')
                    ->label('انتهاء الإقامة')
                    ->sortable()
                    ->badge()
                    ->formatStateUsing(function ($state) {
                        if (! $state) {
                            return '-';
                        }

        $date = Carbon::parse($state);

        $days = now()->startOfDay()->diffInDays(
            $date->startOfDay(),
            false
        );

        if ($days < 0) {
            return '❌ منتهية منذ ' . abs($days) . ' يوم';
        }

        if ($days <= 30) {
            return '🔴 ' . $date->format('Y-m-d') . ' • متبقي ' . $days . ' يوم';
        }

        if ($days <= 90) {
            return '🟠 ' . $date->format('Y-m-d') . ' • متبقي ' . $days . ' يوم';
        }

        return '🟢 ' . $date->format('Y-m-d') . ' • متبقي ' . $days . ' يوم';
    })
    ->color(function ($state) {
        if (! $state) {
            return 'gray';
        }

        $days = now()->startOfDay()->diffInDays(
            Carbon::parse($state)->startOfDay(),
            false
        );

        if ($days < 0) {
            return 'danger';
        }

        if ($days <= 30) {
            return 'danger';
        }

        if ($days <= 90) {
            return 'warning';
        }

        return 'success';
    })
    ->icon(function ($state) {
        if (! $state) {
            return 'heroicon-o-calendar-days';
        }

        $days = now()->startOfDay()->diffInDays(
            Carbon::parse($state)->startOfDay(),
            false
        );

        if ($days < 0) {
            return 'heroicon-o-x-circle';
        }

        if ($days <= 30) {
            return 'heroicon-o-exclamation-circle';
        }

        if ($days <= 90) {
            return 'heroicon-o-exclamation-triangle';
        }

        return 'heroicon-o-check-circle';
    }),

                TextColumn::make('first_arrival')
                    ->label('أول دخول')
                    ->date()
                    ->sortable(),

                TextColumn::make('last_travel')
                    ->label('آخر سفر')
                    ->date()
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('تاريخ الإنشاء')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('آخر تحديث')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()
                    ->label('تعديل'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->label('حذف'),
                ]),
            ]);
    }
}
