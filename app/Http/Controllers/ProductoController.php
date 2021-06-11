<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\detalle_pedido;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos=Producto::orderBy('id_producto','DESC')->paginate(7);
        return view('producto.index',compact('productos'));   

        $productos= DB::table('pedido_factura as pf')
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
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos=new producto;
        $productos->garantia_id_garantia=$request->get('garantia_id_garantia');
        $productos->nombre=$request->get('nombre');
        $productos->marca=$request->get('marca');
        $productos->Cantidad=$request->get('cantidad');
        $productos->precio_unitario=$request->get('precio_unitario');
        $productos->nacional=$request->get('nacional');
        $productos->save();
        return Redirect::to('producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_producto)
    {
       $productos=producto::findOrFail($id_producto);
      /* $productos= DB::table('producto as pro')
       ->where('id_producto','=', $id_producto)
       ->get();
       //dd($productos);*/
        return view("producto.edit",["producto"=>$productos]);

    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_producto)
    {
        $productos=producto::findOrFail($id_producto);
        $productos->garantia_id_garantia=$request->get('garantia_id_garantia');
        $productos->nombre=$request->get('nombre');
        $productos->marca=$request->get('marca');
        $productos->Cantidad=$request->get('cantidad');
        $productos->precio_unitario=$request->get('precio_unitario');
        $productos->nacional=$request->get('nacional');
        $productos->update();
        return Redirect::to('producto');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_producto)
    {
        $productos=producto::findOrFail($id_producto);
        $pedido_detalle = detalle_pedido::where('producto_id_producto', '=', $id_producto);
        $pedido_detalle->delete();
        $productos->delete();
        return Redirect::to('producto');
    }
}
