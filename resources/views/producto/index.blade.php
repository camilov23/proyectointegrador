@extends('layouts.plantilla')
@section('contenido')
<div class="row">
    <div class="col-md-8 col-xs-12">
    @include('producto.search')
    <h3>Reporte Todos Los productos    <a href="\imprimirproductos"><button class="btn btn-success"><span class="glyphicon glyphicon-download-alt"></span></button></a></h3>
    </div>
    
        <div class="col-md-2">
            <a href="producto/create" class="pull-right">
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
                                        <th>Garantia</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th>Stock</th>
                                        <th>Marca</th>
                                        <th>Nacional</th>
                                        <th width="180">Opciones</th>
                                    </thead>
                                    <tbody>
                                    @foreach($productos as $producto)
                                    <tr>
                                        <td>{{ $producto->id_producto }}</td>
                                            <td>{{ $producto->garantia_id_garantia }}</td>
                                            <td>{{ $producto->nombre }}</td>
                                            <td>{{ $producto->precio_unitario}}</td>
                                            <td>{{ $producto->cantidad }}</td>
                                            <td>{{ $producto->marca }}</td>
                                            <td>{{ $producto->nacional }}</td>

                                            <td>
                                            <a href="{{URL::action('ProductoController@edit',$producto->id_producto)}}">
                                            <button class="btn btn-primary"><img src="dist/img/update2.png" ></button></a>

                                                    <a href=""data-target="#modal-delete-{{$producto->id_producto}}" data-toggle="modal">
                                                    <button class="btn btn-danger"><img src="dist/img/delete2.png" ></button></a>
                                            </td>
                                        </tr>
                                        @include('producto.modal')
                                        @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                    {{$productos->links()}}
                                    </div>
                                    </div>

                                    @endsection