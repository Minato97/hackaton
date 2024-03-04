<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesionista extends Model
{
    use HasFactory;
    protected $table = 'profesionistas';
    protected $fillable = [
        'id',
        'nombres',
        'apellido_paterno',
        'apellido_materno',
        'telefono',
        'email',
        'id_dependencias',
        'id_users',
        'id_profesiones'
    ];
    public function dependencias(){
        return $this->belongsTo(Dependencia::class,'id_dependencias');
    }
    public function profesiones(){
        return $this->belongsTo(Profesion::class,'id_profesiones');
    }
    public function users(){
        return $this->belongsTo(User::class,'id_users');
    }
}
