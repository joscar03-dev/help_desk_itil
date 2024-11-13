<?php

namespace App\Filament\Resources\ComentarioIncidenciaResource\Pages;

use App\Filament\Resources\ComentarioIncidenciaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListComentarioIncidencias extends ListRecords
{
    protected static string $resource = ComentarioIncidenciaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
