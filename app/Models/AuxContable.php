<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuxContable extends Model
{
    protected $table='aux_contable';

    protected $fillable=[
        'nombre',
        'estado'
    ];

    protected $hidden=[
        'created_at',
        'updated_at'
    ];
}
