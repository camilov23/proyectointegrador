@extends('layouts.plantilla')
@section('contenido')

<div class="row">
    <div class="col-md-8 col-xs-12">
    @include('pedido.search')
    <h3>Reporte Todos Los pedidos    <a href="\imprimirpedidos"><button class="btn btn-success"><span class="glyphicon glyphicon-download-alt"></span></button></a></h3>
    </div>
    
        <div class="col-md-2">
            <a href="pedido/create" class="pull-right">
                <button class="btn btn-success"><img src="dist/img/add2.png" ></button>
                </a>
                </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <th>ID</th>  
                                        <th>Empleado</th>
                                        <th>Cliente</th>
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
                                            <td>{{ $pedido->id_pedido_fact }}</td>
                                            <td>{{ $pedido->empleado_id_empleado}}</td>
                                            <td>{{ $pedido->cliente_id_cliente }}</td>
                                            <td>{{ $pedido->fecha_pedido}}</td>
                                            <td>{{ $pedido->hora}}</td>
                                            <td>{{ $pedido->subtotal }}</td>
                                            <td>{{ $pedido->iva }}</td>
                                            <td>{{ $pedido->valor_total }}</td>
                                            <td>{{ $pedido->metodo_pago }}</td>
                                            <td>
                                          
                                            <a href="{{URL::action('pedidosController@edit',$pedido->id_pedido_fact)}}">
                                            <button class="btn btn-primary"><img src="dist/img/update2.png" ></button></a>

                                            <a href="{{URL::action('facturaPdfController@imprimirpagos',$pedido->id_pedido_fact)}}">
                                            <button class="btn btn-warning"><img src="dist/img/pay2.png" ></button>

                                                    <a href="" data-target="#modal-delete-{{$pedido->id_pedido_fact}}" data-toggle="modal">
                                                    <button class="btn btn-danger"><img src="dist/img/delete2.png" ></button></a>  
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
                                    
                        