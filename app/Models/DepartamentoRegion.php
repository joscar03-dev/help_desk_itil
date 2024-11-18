<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartamentoRegion extends Model
{
    use HasFactory;

    protected $table = 'departamento_region';

    protected $fillable = ['codigo', 'descripcion'];

    public function provincias()
    {
        return $this->hasMany(Provincia::class);
    }

    // Provincia.php
    public function distritos()
    {
        return $this->hasMany(Distrito::class);
    }
}
