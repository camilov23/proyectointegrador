@extends('layouts.plantilla')
@section('contenido')
<div class="row">
    <div class="col-md-8 col-xs-12">
    @include('pedido.search')
    <h3>Reporte Todos Los pedidos    <a href="\imprimirpedidos"><button class="btn btn-success"><span class="glyphicon glyphicon-download-alt"></span>    Generar PDF</button></a></h3>
    </div>
    
        <div class="col-md-2">
            <a href="pedido/create" class="pull-right">
                <button class="btn btn-success">Insertar pedido</button>
                </a>
                </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <th>ID</th>  
                                        <th>Id_Empleado</th>
                                        <th>Id_Cliente</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Subtotal</th>
                                        <th>Iva</th>
                                        <th>Total</th>
                                        <th>Metodo de Pago</th>
 
                                        <th width="180">Opciones</th>
                                    </thead>
                                    <tbody>
                                    @foreach($pedidos as $pedido)
                                    <tr>
                                            <td>{{ $pedido->id }}</td>
                                            <td>{{ $pedido->id_empleado}}</td>
                                            <td>{{ $pedido->id_cliente }}</td>
                                            <td>{{ $pedido->fecha}}</td>
                                            <td>{{ $pedido->hora}}</td>
                                            <td>{{ $pedido->subtotal }}</td>
                                            <td>{{ $pedido->iva}}</td>
                                            <td>{{ $pedido->total }}</td>
                                            <td>{{ $pedido->id_metodo_pago }}</td>
                                            <td>
                                            <a href="{{URL::action('pedidosController@edit',$pedido->id)}}">
                                            <button class="btn btn-primary">Actualizar</button></a>

                                                    <a href=""data-target="#modal-delete-{{$pedido->id}}" data-toggle="modal">
                                                    <button class="btn btn-danger">Eliminar</button></a>
                                            </td>
                                        </tr>
                                        @include('pedido.modal')
                                        @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                    {{$pedidos->links()}}
                                    </div>
                                    </div>

                                    @endsection