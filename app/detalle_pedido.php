<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\pedidos;
use App\producto;
class detalle_pedido extends Model
{
    protected $table = 'pedido_detalle';
    protected $foreignKey = ['pedido_factura_id_pedido_fact' ,'producto_id_producto'];
    protected $fillable = ['pedido_factura_id_pedido_fact', 'producto_id_producto' , 'cantidad'];
    public $timestamps = false;

    
    
}