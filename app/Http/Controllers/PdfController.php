<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function imprimirproductos(Request $request)
    {
        $productos = DB::table('productos as pro')->select('pro.id', 'pro.nombre', 'pro.marca', 'pro.precio', 'pro.nacional')
        ->get();
        $pdf = \PDF::loadView('Pdf.productoPDF', ['producto' => $productos]);
        $pdf->setPaper('carta', 'A4');
        return $pdf->download('Listado de Productos.pdf');
    }
}
