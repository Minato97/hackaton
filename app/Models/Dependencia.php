<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependencia extends Model
{
    use HasFactory;
    protected $table = 'dependencias';
    protected $fillable = [
        'id',
        'dependencia',
        'telefono',
        'id_categorias_disciplinas'
    ];
    public function categorias(){
        return $this->belongsTo(CategoriaDisciplina::class,'id_categorias_disciplinas');
    }
    public function profesionistas(){
        return $this->hasMany(Profesionista::class,'id_dependencias');
    }

    public function tratamientos(){
        return $this->hasMany(Tratamiento::class,'id_dependencias');
    }
}
