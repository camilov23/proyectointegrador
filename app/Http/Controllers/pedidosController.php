<?php

namespace App\Http\Controllers;
use App\detalle_pedido;
use App\pedidos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;


class pedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $pedidos = pedidos::orderBy('id_pedido_fact', 'DESC')->paginate(7);
        return view('pedido.index', compact('pedidos'));

        $pedidos = DB::table('pedido_factura as pf')
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
        return view('pedido.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedidos = new pedidos;
        $pedidos->empleado_id_empleado = $request->get('empleado_id_empleado');
        $pedidos->cliente_id_cliente = $request->get('cliente_id_cliente');
        $pedidos->subtotal = $request->get('subtotal');
        $pedidos->iva = $request->get('iva');
        $pedidos->valor_total = $request->get('valor_total');
        $pedidos->metodo_pago = $request->get('metodo_pago');
        $pedidos->save();
        return Redirect::to('pedido');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_pedido_fact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_pedido_fact)
    {
        $pedidos=pedidos::findOrFail($id_pedido_fact);
        return view("pedido.edit",["pedidos"=>$pedidos]);
    }
  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pedido_fact)
    {
        $pedidos=pedidos::findOrFail($id_pedido_fact);
        $pedidos->empleado_id_empleado = $request->get('empleado_id_empleado');
        $pedidos->cliente_id_cliente = $request->get('cliente_id_cliente');
        $pedidos->subtotal = $request->get('subtotal');
        $pedidos->iva = $request->get('iva');
        $pedidos->valor_total = $request->get('valor_total');
        $pedidos->metodo_pago = $request->get('metodo_pago');
        $pedidos->update();
        return Redirect::to('pedido');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pedido_fact)
    {
        $pedidos = pedidos::findOrFail($id_pedido_fact);
        $pedidos->delete();
        return Redirect::to('pedido');
    }
}
