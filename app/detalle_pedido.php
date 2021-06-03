<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_pedido extends Model
{
    protected $fillable = ['id_pedido', 'id_producto' , 'cantidad'];
    public $timestamps = false;
}