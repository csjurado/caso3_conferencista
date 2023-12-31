<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conferencista extends Model
{
    use HasFactory;
    protected $dates = ['ultimo_dia'];
    protected $fillable =[
        'nombre',
        'apellido',
        'cedula',
        'genero',
        'ciudad',
        'direccion',
        'fecha_nacimiento',
        'telefono',
        'email',
        'empresa',
    ];
}
