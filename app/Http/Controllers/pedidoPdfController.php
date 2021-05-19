<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class pedidoPdfController extends Controller
{
    public function imprimirpedidos(Request $request)
    {
        $pedidos = DB::table('pedidos as ped')->select('ped.id', 'ped.id_empleado', 'ped.fecha', 'ped.id_cliente', 'ped.subtotal', 'ped.iva' , 'ped.total', 'ped.id_metodo_pago')->get();
        $pdf = \PDF::loadView('Pdf.pedidosPDF', ['pedidos' => $pedidos]);
        $pdf->setPaper('carta', 'A4');
        return $pdf->download('Listado de Pedidos.pdf');
    }
}
