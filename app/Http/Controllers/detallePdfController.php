<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class detallePdfController extends Controller
{
    public function imprimirdetalle(Request $request)
    {
        $detalle_pedido = DB::table('pedido_detalle as pedi')->select('pedi.pedido_factura_id_pedido_fact', 'pedi.producto_id_producto','pedi.cantidad')
        ->get();
        $pdf = \PDF::loadView('Pdf.detallePDF', ['pedido_detalle' => $detalle_pedido]);
        $pdf->setPaper('carta', 'A4');
        return $pdf->download('Listado de Productos.pdf');
    }
}
