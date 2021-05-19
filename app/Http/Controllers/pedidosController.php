<?php

namespace App\Http\Controllers;

use App\pedidos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class pedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = pedidos::orderBy('id', 'DESC')->paginate(7);
        return view('pedido.index', compact('pedidos'));
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
        $pedidos->id_empleado = $request->get('id_empleado');
        $pedidos->id_cliente = $request->get('id_cliente');
        $pedidos->subtotal = $request->get('subtotal');
        $pedidos->iva = $request->get('iva');
        $pedidos->total = $request->get('total');
        $pedidos->id_metodo_pago = $request->get('id_metodo_pago');
        $pedidos->save();
        return Redirect::to('pedido');
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
        $pedidos=pedidos::findOrFail($id);
        return view("pedido.edit",["pedidos"=>$pedidos]);
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
        $pedidos=pedidos::findOrFail($id);
        $pedidos->id_empleado = $request->get('id_empleado');
        $pedidos->id_cliente = $request->get('id_cliente');
        $pedidos->subtotal = $request->get('subtotal');
        $pedidos->iva = $request->get('iva');
        $pedidos->total = $request->get('total');
        $pedidos->id_metodo_pago = $request->get('id_metodo_pago');
        $pedidos->update();
        return Redirect::to('pedido');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedidos = pedidos::findOrFail($id);
        $pedidos->delete();
        return Redirect::to('pedido');
    }
}
