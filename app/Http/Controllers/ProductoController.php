<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use Illuminate\Support\Facades\Redirect;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos=Producto::orderBy('id','DESC')->paginate(3);
        return view('producto.index',compact('productos'));   
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
        $productos->nombre=$request->get('nombre');
        $productos->marca=$request->get('marca');
        $productos->precio=$request->get('precio');
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
        $productos=producto::findOrFail($id);
        return view("producto.edit",["producto"=>$productos]);
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
        $productos=producto::findOrFail($id);
        $productos->nombre=$request->get('nombre');
        $productos->marca=$request->get('marca');
        $productos->precio=$request->get('precio');
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
    public function destroy($id)
    {
        $productos=producto::findOrFail($id);
        $productos->delete();
        return Redirect::to('producto');
    }
}
