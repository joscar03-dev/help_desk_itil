<?php

namespace App\Filament\Resources\CategoriaIncidenciaResource\Pages;

use App\Filament\Resources\CategoriaIncidenciaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategoriaIncidencia extends EditRecord
{
    protected static string $resource = CategoriaIncidenciaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
