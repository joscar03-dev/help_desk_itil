<?php

namespace App\Filament\Resources\ReporteIncidenciaResource\Pages;

use App\Filament\Resources\ReporteIncidenciaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReporteIncidencias extends ListRecords
{
    protected static string $resource = ReporteIncidenciaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
