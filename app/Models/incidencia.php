<?php

namespace App\Models;

use Filament\Forms\Components\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class incidencia extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'descripcion',
        'estado_id',
        'prioridad_id',
        'categoria_id',
        'creado_por',
        'asignado_a'
    ];

    public function estado()
    {
        return $this->belongsTo(estadoIncidencia::class);
    }

    public function prioridad()
    {
        return $this->belongsTo(prioridadIncidencia::class);
    }

    public function categoria()
    {
        return $this->belongsTo(categoriaIncidencia::class);
    }

    public function creador()
    {
        return $this->belongsTo(User::class, 'creado_por');
    }

    public function asignado()
    {
        return $this->belongsTo(User::class, 'asignado_a');
    }

    public function comentarios()
    {
        return $this->hasMany(ComentarioIncidencia::class);
    }

    public function reportes()
    {
        return $this->hasMany(ReporteIncidencia::class);
    }

}
