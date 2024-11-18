<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ComentarioIncidenciaResource\Pages;
use App\Filament\Resources\ComentarioIncidenciaResource\RelationManagers;
use App\Models\ComentarioIncidencia;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ComentarioIncidenciaResource extends Resource
{
    protected static ?string $model = ComentarioIncidencia::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListComentarioIncidencias::route('/'),
            'create' => Pages\CreateComentarioIncidencia::route('/create'),
            'edit' => Pages\EditComentarioIncidencia::route('/{record}/edit'),
        ];
    }
}
