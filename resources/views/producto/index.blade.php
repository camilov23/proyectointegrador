@extends('layouts.plantilla')
@section('contenido')
<div class="row">
    <div class="col-md-8 col-xs-12">
    @include('producto.search')
    </div>
        <div class="col-md-2">
            <a href="producto/create" class="pull-right">
                <button class="btn btn-success">Insertar Producto</button>
                </a>
                </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <th>Id</th>  
                                        <th>Nombre</th>
                                        <th>Marca</th>
                                        <th>Precio</th>
                                        <th>Nacional</th>
                                        <th width="180">Opciones</th>
                                    </thead>
                                    <tbody>
                                    @foreach($productos as $producto)
                                    <tr>
                                            <td>{{ $producto->id }}</td>
                                            <td>{{ $producto->nombre }}</td>
                                            <td>{{ $producto->marca }}</td>
                                            <td>{{ $producto->precio }}</td>
                                            <td>{{ $producto->nacional }}</td>
                                            <td>
                                            <a href="{{URL::action('ProductoController@edit',$producto->id)}}">
                                            <button class="btn btn-primary">Actualizar</button></a>

                                                    <a href=""data-target="#modal-delete-{{$producto->id}}" data-toggle="modal">
                                                    <button class="btn btn-danger">Eliminar</button></a>
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