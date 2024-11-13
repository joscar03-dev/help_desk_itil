<?php

namespace App\Filament\Resources\EstadoIncidenciaResource\Pages;

use App\Filament\Resources\EstadoIncidenciaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEstadoIncidencias extends ListRecords
{
    protected static string $resource = EstadoIncidenciaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
