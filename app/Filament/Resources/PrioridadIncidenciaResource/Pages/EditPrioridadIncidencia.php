<?php

namespace App\Filament\Resources\PrioridadIncidenciaResource\Pages;

use App\Filament\Resources\PrioridadIncidenciaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrioridadIncidencia extends EditRecord
{
    protected static string $resource = PrioridadIncidenciaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
