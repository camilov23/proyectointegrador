<?php

namespace App;
use App\detalle_pedido;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;
class pedidos extends Model
{
    protected $table = 'pedido_factura';
    protected $primary_key = 'id_pedido_fact';
    protected $foreign_key_constraints = ['cliente_id_cliente', 'empleado_id_empleado'];
    public $timestamps = false;
    protected $fillable = ['cliente_id_cliente', 'id_pedido', 'fecha_pedido', 'valor_total', 'hora','subtotal', 'empleado_id_empleado','metodo_pago'];
    
    public function detalle_pedido(){

        return $this->belongsTo('App\detalle_pedido', 'pedido_factura_id_pedido_fact');

  
}
}