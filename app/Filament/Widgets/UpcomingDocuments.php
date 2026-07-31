<?php

namespace App\Filament\Widgets;

use App\Models\Document;
use Filament\Widgets\Widget;

class UpcomingDocuments extends Widget
{
    protected string $view = 'filament.widgets.upcoming-documents';

    protected static ?string $heading = '📄 أقرب الوثائق انتهاءً';

    protected static ?int $sort = 2;

    protected int|string|array $columnSpan = 'full';

    public function getViewData(): array
    {
        return [
            'documents' => Document::query()
                ->orderBy('expiry_date')
                ->limit(5)
                ->get(),
        ];
    }
}
