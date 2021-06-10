@extends('layouts.plantilla')
@section('contenido')
<div class="row">
    <div class="col-md-8 col-xs-12">
        @include('pedido.search')
        <h3>Reporte Todos Los detalle  <a href="\imprimirdetalle"><button class="btn btn-success"><span class="glyphicon glyphicon-download-alt"></span></button></a></h3>
    </div>
    
        <div class="col-md-2">
            <a href="detalle/create" class="pull-right">
                <button class="btn btn-success"><img src="dist/img/add2.png" ></button>
                </a>
                </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <th>Pedido</th>  
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th width="180">Opciones</th>
                                    </thead>
                                    <tbody>
                                    @foreach($detalle_pedido as $detalle)
                                    <tr>
                                            <td>{{ $detalle->pedido_factura_id_pedido_fact }}</td>
                                            <td>{{ $detalle->producto_id_producto}}</td>
                                            <td>{{ $detalle->cantidad }}</td>
                                            <td>
                                                <a href=""data-target="#modal-delete-{{$detalle->pedido_factura_id_pedido_fact}}" data-toggle="modal">
                                                    <button class="btn btn-danger"><img src="dist/img/delete2.png" ></button></a>
                                            </td>
                                        </tr>
                                        @include('detalle.modal')
                                        @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                    {{$detalle_pedido->links()}}
                                    </div>
                                    </div>
                          
                                                                    @endsection