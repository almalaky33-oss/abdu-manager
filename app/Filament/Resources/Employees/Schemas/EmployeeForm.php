<?php

namespace App\Filament\Resources\Employees\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class EmployeeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([
                FileUpload::make('photo')
    ->label('صورة العامل')
    ->image()
    ->imageEditor()
    ->directory('employees')
    ->columnSpanFull(),
                TextInput::make('name')
                    ->label('اسم العامل')
                    ->required(),

                TextInput::make('nationality')
                    ->label('الجنسية'),

                TextInput::make('job_title')
                    ->label('الوظيفة'),

                TextInput::make('phone')
                    ->label('رقم الهاتف')
                    ->tel(),

                TextInput::make('salary')
                    ->label('الراتب')
                    ->numeric(),

                TextInput::make('passport_number')
                    ->label('رقم الجواز'),

                DatePicker::make('passport_expiry')
                    ->label('انتهاء الجواز'),

                TextInput::make('residence_number')
                    ->label('رقم الإقامة'),

                DatePicker::make('residence_expiry')
                    ->label('انتهاء الإقامة'),

                DatePicker::make('first_arrival')
                    ->label('أول وصول'),

                DatePicker::make('last_travel')
                    ->label('آخر سفر'),

                DatePicker::make('return_date')
                    ->label('تاريخ العودة'),

                DatePicker::make('vacation_start')
                    ->label('بداية الإجازة'),

                DatePicker::make('vacation_end')
                    ->label('نهاية الإجازة'),

                Textarea::make('notes')
                    ->label('ملاحظات')
                    ->columnSpanFull(),
            ]);
    }
}
