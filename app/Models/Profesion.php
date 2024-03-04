<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesion extends Model
{
    use HasFactory;
    protected $table = 'profesiones';
    protected $fillable = [
        'id',
        'profesion'
    ];
    public function profesionistas(){
    return $this->hasMany(Profesionista::class,'id_profesiones');
    }
}
