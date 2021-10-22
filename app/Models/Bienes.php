<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bienes extends Model
{
    protected $table='bienes';

    protected $fillable=[
        'nombre',
        'estado'
    ];

    protected $hidden=[
        'created_at',
        'updated_at'
    ];
}
