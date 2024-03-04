<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    use HasFactory;
    protected $table = 'tratamientos';
    protected $fillable = [
        'id'.
        'id_pacientes',
        'id_dependencias',
        'descripcion'
    ];
    public function dependencias(){
        return $this->belongsTo(Dependencia::class,'id_dependencias');
    }
    public function pacientes(){
        return $this->belongsTo(Paciente::class,'id_pacientes');
    }
    public function citas(){
        return $this->hasMany(Cita::class,'id_tratamientos');
    }
    public function actividades(){
        return $this->hasMany(Actividad::class,'id_tratamientos');
    }
}
