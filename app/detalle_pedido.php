<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_pedido extends Model
{
    public $timestamps = false;
    protected $fillable = ['id_factura', 'id_producto', 'id_cliente', 'cantidad'];
}

