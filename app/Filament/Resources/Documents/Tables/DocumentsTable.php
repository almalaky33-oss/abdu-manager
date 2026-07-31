<?php

namespace App\Filament\Resources\Documents\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DocumentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('اسم الوثيقة')
                    ->searchable(),

                TextColumn::make('type')
                    ->label('النوع')
                    ->badge(),

                TextColumn::make('issue_date')
                    ->label('تاريخ الإصدار')
                    ->date(),

                TextColumn::make('expiry_date')
                    ->label('تاريخ الانتهاء')
                    ->date(),

                TextColumn::make('reminder_days')
                    ->label('التنبيه')
                    ->suffix(' يوم'),

                ImageColumn::make('file')
                    ->label('الملف'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
