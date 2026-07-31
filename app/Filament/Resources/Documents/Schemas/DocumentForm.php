<?php

namespace App\Filament\Resources\Documents\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class DocumentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('اسم الوثيقة')
                    ->required(),

                Select::make('type')
                    ->label('النوع')
                    ->options([
                        'عقد' => 'عقد',
                        'ترخيص' => 'ترخيص',
                        'جواز' => 'جواز',
                        'إقامة' => 'إقامة',
                        'شهادة' => 'شهادة',
                        'أخرى' => 'أخرى',
                    ])
                    ->searchable()
                    ->required(),

                DatePicker::make('issue_date')
                    ->label('تاريخ الإصدار'),

                DatePicker::make('expiry_date')
                    ->label('تاريخ الانتهاء'),

                TextInput::make('reminder_days')
                    ->label('عدد أيام التنبيه')
                    ->numeric()
                    ->default(30)
                    ->required(),

                FileUpload::make('file')
                    ->label('ملف الوثيقة')
                    ->directory('documents'),

                Textarea::make('notes')
                    ->label('ملاحظات')
                    ->rows(4)
                    ->columnSpanFull(),
            ])
            ->columns(2);
    }
}
