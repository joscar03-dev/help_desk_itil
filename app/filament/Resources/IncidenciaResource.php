<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IncidenciaResource\Pages;
use App\Filament\Resources\IncidenciaResource\RelationManagers;
use App\Models\categoriaIncidencia;
use App\Models\Departamento;
use App\Models\estadoIncidencia;
use App\Models\Incidencia;
use App\Models\prioridadIncidencia;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Table\Components\TextColumn;


use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\View\TablesRenderHook;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class IncidenciaResource extends Resource
{
    protected static ?string $model = Incidencia::class;

    protected static ?string $navigationLabel = 'Incidencias';
    protected static ?string $pluralLabel = 'Incidencias';

    protected static ?string $navigationIcon = 'heroicon-o-wrench';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('titulo')
                    ->required()
                    ->extraAttributes(['class' => 'text-center'])
                    ->maxLength(255)
                    ->columnSpanFull(),
                Textarea::make('descripcion')
                    ->required()
                    ->columnSpanFull(),
                Section::make('Atributos')
                    ->columns(3)
                    ->icon($icon = 'heroicon-o-user-group')
                    ->schema([
                        Select::make('estado_id')
                            ->label('Estado de incidencias')
                            ->options(estadoIncidencia::all()->pluck('nombre', 'id'))
                            ->required(),
                        Select::make('prioridad_id')
                            ->label('Prioridad de incidencias')
                            ->options(prioridadIncidencia::all()->pluck('nombre', 'id'))
                            ->required(),
                        Select::make('categoria_id')
                            ->label('Categoría de incidencias')
                            ->options(categoriaIncidencia::all()->pluck('nombre', 'id'))
                            ->required(),
                    ]),

                Section::make('Responsables')
                    ->columns(2)
                    ->icon('heroicon-o-calendar')
                    ->schema([
                        Forms\Components\Hidden::make('creado_por') // Cambié a Hidden
                            ->default(fn() => auth()->user()->id),
                        Select::make('asignado_a')
                            ->label('Asignado a')
                            ->options(User::all()->pluck('name', 'id'))
                            ->required()
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table

            ->columns([
                Tables\Columns\TextColumn::make('titulo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('estado.nombre')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('prioridad.nombre')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('categoria.nombre')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('creador.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('asignado.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('creador.departamento.name')
                    ->numeric()
                    ->sortable(),
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
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),



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
            'index' => Pages\ListIncidencias::route('/'),
            'create' => Pages\CreateIncidencia::route('/create'),

            'edit' => Pages\EditIncidencia::route('/{record}/edit'),
        ];
    }
}
