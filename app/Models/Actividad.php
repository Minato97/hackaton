<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;
    protected $table = 'actividades';
    protected $fillable = [
        'id',
        'actividad',
        'descripcion',
        'horario',
        'id_tratamientos'
    ];
public function tratamientos(){
    return $this->belongsTo(Tratamiento::class, 'id:tratamientos');
}
}
