<?php

namespace App\Filament\Resources\ComentarioIncidenciaResource\Pages;

use App\Filament\Resources\ComentarioIncidenciaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditComentarioIncidencia extends EditRecord
{
    protected static string $resource = ComentarioIncidenciaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
