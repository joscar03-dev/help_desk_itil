<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReporteIncidenciaResource\Pages;
use App\Filament\Resources\ReporteIncidenciaResource\RelationManagers;
use App\Models\ReporteIncidencia;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReporteIncidenciaResource extends Resource
{
    protected static ?string $model = ReporteIncidencia::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('incidencia_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('usuario_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('tipo')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('incidencia_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('usuario_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tipo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListReporteIncidencias::route('/'),
            'create' => Pages\CreateReporteIncidencia::route('/create'),
            'edit' => Pages\EditReporteIncidencia::route('/{record}/edit'),
        ];
    }
}
