<?php

namespace App\Filament\App\Resources\IncidenciaResource\Pages;

use App\Filament\App\Resources\IncidenciaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIncidencia extends EditRecord
{
    protected static string $resource = IncidenciaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
