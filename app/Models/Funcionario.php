<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table='funcionario';

    protected $fillable=[
        'nombre',
        'apellido',
        'estado',
        'cargo_id'
    ];

    protected $hidden=[
        'created_at',
        'updated_at'
    ];
}
