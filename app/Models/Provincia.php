<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $fillable = ['codigo','descripcion', 'departamento_id'];

    public function departamento()
    {
        return $this->belongsTo(DepartamentoRegion::class);
    }

    public function distritos()
    {
        return $this->hasMany(Distrito::class);
    }
}
