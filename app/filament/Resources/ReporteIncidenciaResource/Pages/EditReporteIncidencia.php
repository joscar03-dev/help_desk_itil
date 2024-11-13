<?php

namespace App\Filament\Resources\ReporteIncidenciaResource\Pages;

use App\Filament\Resources\ReporteIncidenciaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReporteIncidencia extends EditRecord
{
    protected static string $resource = ReporteIncidenciaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
