<?php

namespace App\Http\Controllers;

use App\pedidos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class facturaPdfController extends Controller
{
    public function imprimirpagos($id_pedido_fact){
   
     $pedidos= DB::table('pedido_factura as pf')
     
     ->join('pedido_detalle as pd','pd.pedido_factura_id_pedido_fact', '=', 'pf.id_pedido_fact')
     ->join('cliente as cl','pf.cliente_id_cliente','=', 'cl.id_cliente')
     ->join('empleado as em','pf.empleado_id_empleado', '=', 'em.id_empleado')
     ->join('producto as pr','pd.producto_id_producto', '=', 'pr.id_producto')
     ->where('id_pedido_fact', '=' , $id_pedido_fact)
     ->get();
     //dd($pedidos);
     $pdf = \PDF::loadView('Pdf.facturaPDF',['pedido' => $pedidos]);
     $pdf->setPaper('carta', 'A4');
     return $pdf->download('Factura Venta Megacar.pdf');
    }


    
}

/*SELECT * FROM pedido_factura pf, pedido_detalle pd, cliente cl, empleado em, producto pr 
WHERE pf.cliente_id_cliente = cl.id_cliente 
AND pf.empleado_id_empleado = em.id_empleado 
AND pd.pedido_factura_id_pedido_fact = pf.id_pedido_fact 
AND pd.producto_id_producto = pr.id_producto;*/