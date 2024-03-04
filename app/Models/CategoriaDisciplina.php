<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaDisciplina extends Model
{
    use HasFactory;
    protected $table = 'categorias_disciplinas';
    protected $fillable = [
        'id',
        'categoria'
    ];
    public function dependencias(){
        return $this->hasMany(Dependencia::class,'id_categorias_disciplinas');
    }
}
