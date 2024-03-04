<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    protected $tabla = 'citas';
    protected $fillable = [
        'id',
        'fecha',
        'id_tratamientos'
    ];
    public function tratamientos(){
        return $this->belongsTo(Tratamiento::class,'id_tratamientos');
    }
}
