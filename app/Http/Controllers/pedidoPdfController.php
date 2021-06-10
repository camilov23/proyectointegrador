<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class pedidoPdfController extends Controller
{
    public function imprimirpedidos(Request $request)
    {
        $pedidos = DB::table('pedido_factura as ped')->select('ped.id_pedido_fact', 'ped.empleado_id_empleado', 'ped.fecha_pedido','ped.hora', 'ped.cliente_id_cliente', 'ped.subtotal', 'ped.iva' , 'ped.valor_total', 'ped.metodo_pago')->get();
        $pdf = \PDF::loadView('Pdf.pedidosPDF', ['pedido_factura' => $pedidos]);
        $pdf->setPaper('carta', 'A4');
        return $pdf->download('Listado de Pedidos.pdf');
    }
}
