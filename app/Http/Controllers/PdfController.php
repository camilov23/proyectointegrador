<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function imprimirproductos(Request $request)
    {
        $producto = DB::table('producto as pro')->select('pro.id_producto', 'pro.garantia_id_garantia','pro.nombre', 'pro.marca', 'pro.cantidad', 'pro.precio_unitario', 'pro.nacional')
        ->get();
        $pdf = \PDF::loadView('Pdf.productoPDF', ['producto' => $producto]);
        $pdf->setPaper('carta', 'A4');
        return $pdf->download('Listado de Productos.pdf');
    }
}
