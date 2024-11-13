<?php

namespace App\Filament\Resources\PrioridadIncidenciaResource\Pages;

use App\Filament\Resources\PrioridadIncidenciaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPrioridadIncidencias extends ListRecords
{
    protected static string $resource = PrioridadIncidenciaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
