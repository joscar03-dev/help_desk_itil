<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\City;
use App\Models\Country;
use App\Models\Departamento;
use App\Models\State;
use App\Models\DepartamentoRegion;
use App\Models\Distrito;
use App\Models\Provincia;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserResource extends Resource
{
    //@intelephense-ignore
    protected static ?string $model = User::class;

    protected static ?string $navigationLabel = 'Usuarios';
    protected static ?string $pluralLabel = 'Usuarios';
    protected static ?string $navigationGroup = 'Configuracion de usuario';
    protected static ?int $navigationSort = 5;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static $modelu = \App\Models\User::class;



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Información Personal')
                    ->columns(3)
                    ->icon('heroicon-o-users')
                    ->schema([

                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('password')
                            ->password()
                            ->required()
                            ->hiddenOn('edit')
                            ->maxLength(255)
                            ->dehydrateStateUsing(fn($state) => Hash::make($state)),

                        /* Select::make('departamento_id')
                            ->label('Departamento')
                            ->searchable()
                            ->options(
                                DepartamentoRegion::all()->pluck('descripcion', 'id')
                            )
                            ->reactive()
                            ->afterStateUpdated(function ($state, callable $set) {
                                $set('provincia_id', null); // Resetear provincia
                                $set('distrito_id', null);  // Resetear distrito
                            }),

                        Select::make('provincia_id')
                            ->label('Provincia')
                            ->searchable()
                            ->options(function (callable $get) {
                                $departamentoId = $get('departamento_id');
                                return Provincia::where('departamento_id', $departamentoId)
                                    ->pluck('descripcion', 'id');
                            })
                            ->reactive()
                            ->afterStateUpdated(function ($state, callable $set) {
                                $set('distrito_id', null); // Resetear distrito
                            }),

                        Select::make('distrito_id')
                            ->label('Distrito')
                            ->searchable()
                            ->options(function (callable $get) {
                                $provinciaId = $get('provincia_id');
                                return Distrito::where('provincia_id', $provinciaId)
                                    ->pluck('descripcion', 'id');
                            }), */

                        Select::make('departamento_id')
                            ->label('Departamento/Área')
                            ->options(Departamento::all()->pluck('name', 'id'))
                            ->required(),

                        Select::make('roles')
                            ->label('Rol')
                            ->relationship('roles', 'name') // Usar el nombre del rol
                            ->options(Role::all()->pluck('name', 'id'))
                            ->preload()
                            ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                /* Tables\Columns\TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->sortable(), */
                Tables\Columns\TextColumn::make('departamento.name')
                    ->label('Departamento/Área')
                    ->searchable(),
                Tables\Columns\TextColumn::make('roles')
                    ->label('Rol')
                    ->searchable()
                    ->getStateUsing(fn(User $user) => $user->roles->pluck('name')->implode(', ')),
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
                Tables\Actions\EditAction::make()
                ->label('Editar'),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
