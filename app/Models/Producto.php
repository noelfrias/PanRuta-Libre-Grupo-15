<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $primaryKey = 'id_producto';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'presentacion',
        'costo',
        'precio',
        'estado',
    ];

    protected $casts = [
        'costo' => 'decimal:2',
        'precio' => 'decimal:2',
        'estado' => 'integer',
    ];
}
