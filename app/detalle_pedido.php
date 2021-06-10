<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\pedidos;
use App\producto;
class detalle_pedido extends Model
{
    protected $table = 'pedido_detalle';
    protected $foreign_key_constraints = ['pedido_factura_id_pedido_fact' ,'producto_id_producto'];
    protected $fillable = ['pedido_factura_id_pedido_fact', 'producto_id_producto' , 'cantidad'];
    public $timestamps = false;

    public function pedidos(){

        return $this->hasMany('App\pedidos','id_pedido_fact' , 'pedido_factura_id_pedido_fact');
    }
    public function producto(){

        return $this->hasMany('App\producto');
    }
}