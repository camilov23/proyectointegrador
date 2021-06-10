@extends('layouts.plantilla')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar el producto</h3>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
{{Form::open(array('action'=>array('ProductoController@update', $producto->id_producto),'method'=>'patch'))}}
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="nombre">garantia</label>
            <input type="text" name="garantia_id_garantia" id="garantia_id_garantia" class="form-control" placeholder="garantia" value="{{$producto->garantia_id_garantia}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" value="{{$producto->nombre}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="marca">Marca</label>
            <input type="text" name="marca" id="marca" class="form-control" placeholder="Marca" value="{{$producto->marca}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="cantidad">Cantidad</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" placeholder="Cantidad" value="{{$producto->cantidad}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="precio_unitario">precio</label>
            <input type="number" name="precio_unitario" id="precio_unitario" class="form-control" placeholder="Precio" value="{{$producto->precio_unitario}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="nacional">Nacional</label>
            <input type="text" name="nacional" id="nacional" class="form-control" placeholder="nacional" value="{{$producto->nacional}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <button class="btn btn-primary"type="submit">
                <span class="glyphicon glyphicon-refresh"></span>  Actualizar </button>
                    <a class="btn btn-info"type="reset" href="{{url('producto')}}">
                        <span class="glyphicon glyphicon-home"></span>  Regresar </a>
</div>
</div>
</div>
{!!Form::close()!!} 
@endsection