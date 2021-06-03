<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'id_empleado', 'id_cliente', 'fecha', 'hora','subtotal', 'iva', 'total', 'id_metodo_pago'];

    public function detalle_pedido(){
        return $this->hasMany('App\detalle_pedido');
    }   
}
