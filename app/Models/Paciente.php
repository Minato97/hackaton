<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $table = 'pacientes';
    protected $fillable = [
        'id',
        'nombres',
        'apellido_paterno',
        'apellido_materno',
        'telefono',
        'email',
        'id_users'
    ];
    public function tratamientos(){
    return $this->hasMany(Tratamiento::class,'id_pacientes');
    }
    public function users(){
        return $this->belongsTo(User::class,'id_users');
    }
}
