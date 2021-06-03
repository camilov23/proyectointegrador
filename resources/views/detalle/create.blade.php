@extends('layouts.plantilla')
@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>detalle_pedido</h3>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
{!!Form::open(array('url'=>'detalle','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
        <br><label for="id_pedido">Pedido</label>
            <input type="text" name="id_pedido" id="id_pedido" class="form-control" placeholder="pedido">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="id_producto">Producto</label>
            <input type="text" name="id_producto" id="id_producto" class="form-control" placeholder="Marca">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="cantidad">Cantidad</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" placeholder="Cantidad">
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <button class="btn btn-primary"type="submit">
                <span class="glyphicon glyphicon-ok"></span>  Guardar</button>
                    <button class="btn btn-danger"type="reset">
                        <span class="glyphicon glyphicon-remove"></span> Vaciar Campos</button>
                            <a class="btn btn-info"type="reset" href="{{url('detalle')}}">
                                <span class="glyphicon glyphicon-home"></span>Regresar</a>
</div>
</div>
</div>

{!!Form::close()!!} 

@endsection