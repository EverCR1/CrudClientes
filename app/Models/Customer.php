<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //use HasFactory;

    //Crea la tabla Cliente con los campos necesarios
    protected $fillable = [

        'Nombres',
        'Apellidos',
        'Correo'
    ];
}
