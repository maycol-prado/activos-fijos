<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table='cargo';

    protected $fillable=[
        'nombre',
        'estado'
    ];

    protected $hidden=[
        'created_at',
        'updated_at'
    ];
}
