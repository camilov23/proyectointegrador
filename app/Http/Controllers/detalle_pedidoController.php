<?php

namespace App\Http\Controllers;
use App\detalle_pedido;
use App\pedidos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;
class detalle_pedidoController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalle_pedido = detalle_pedido::orderBy('pedido_factura_id_pedido_fact', 'DESC')->paginate(3);
        return view('detalle.index', compact('detalle_pedido'));
        
        $detalle_pedido = DB::table('pedido_factura as pf')
        ->join('pedido_detalle as pd','pd.pedido_factura_id_pedido_fact', '=', 'pf.id_pedido_fact')
        ->join('cliente as cl','pf.cliente_id_cliente','=', 'cl.id_cliente')
        ->join('empleado as em','pf.empleado_id_empleado', '=', 'em.id_empleado')
        ->join('producto as pr','pd.producto_id_producto', '=', 'pr.id_producto')
        ->get();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('detalle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detalle_pedido= new detalle_pedido;
        $detalle_pedido->pedido_factura_id_pedido_fact= $request->get('pedido_factura_id_pedido_fact');
        $detalle_pedido->producto_id_producto = $request->get('producto_id_producto');
        $detalle_pedido->cantidad= $request->get('cantidad');
        $detalle_pedido->save();
        return Redirect::to('detalle');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pedido_factura_id_pedido_fact)
    {
        $detalle_pedido = detalle_pedido::findOrFail($pedido_factura_id_pedido_fact);
        $pedidos= pedidos::where('id_pedido_fact', '=', $pedido_factura_id_pedido_fact);
        $detalle_pedido->delete();
        $pedidos->delete();
        return Redirect::to('detalle');
    }
}
