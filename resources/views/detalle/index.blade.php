@extends('layouts.plantilla')
@section('contenido')
<div class="row">
    <div class="col-md-8 col-xs-12">
    
    </div>
        <div class="col-md-2">
            <a href="detalle/create" class="pull-right">
                <button class="btn btn-success">cantidad de Producto</button>
                </a>
                </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <th>pedido</th>  
                                        <th>producto</th>
                                        <th>cantidad</th>
                                    </thead>
                                    <tbody>
                                    @foreach($detalle_pedido as $detalle)
                                    <tr>
                                            <td>{{ $detalle->id_pedido }}</td>
                                            <td>{{ $detalle->id_producto }}</td>
                                            <td>{{ $detalle->cantidad }}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                    {{$detalle_pedido->links()}}
                                    </div>
                                    </div>
                          
                                                                    @endsection