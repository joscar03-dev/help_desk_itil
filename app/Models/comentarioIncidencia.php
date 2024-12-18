<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comentarioIncidencia extends Model
{
    use HasFactory;
    protected $fillable = ['incidencia_id', 'usuario_id', 'comentario'];

    public function incidencia()
    {
        return $this->belongsTo(Incidencia::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
