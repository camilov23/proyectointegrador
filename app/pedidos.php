<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'id_empleado', 'id_cliente', 'fecha', 'subtotal', 'iva', 'total', 'id_metodo_pago'];
}
