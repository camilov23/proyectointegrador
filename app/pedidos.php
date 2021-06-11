<?php

namespace App;
use App\detalle_pedido;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;
class pedidos extends Model
{
    protected $table = 'pedido_factura';
    protected $primaryKey = 'id_pedido_fact';
    protected $foreignkeyconstraints = ['cliente_id_cliente', 'empleado_id_empleado'];
    public $timestamps = false;
    protected $fillable = ['cliente_id_cliente', 'id_pedido', 'fecha_pedido', 'valor_total', 'hora','subtotal', 'empleado_id_empleado','metodo_pago'];
    
    

}