<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivosFijo extends Model
{
    protected $table='activos_fijo';

    protected $fillable=[
        'tipo_bienes_id',
        'aux_contable_id',
        'descripcion',
        'ci',
        'cargo_id',
        'ubicacion',
        'estado'
    ];

    protected $hidden=[
        'created_at',
        'updated_at'
    ];
}
