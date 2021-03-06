@extends('layouts.plantilla')
@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Producto</h3>
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
{!!Form::open(array('url'=>'producto','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <br><label for="garantia_id_garantia">garantia</label>
                <input type="text" name="garantia_id_garantia" id="garantia_id_garantia" class="form-control" placeholder="garantia">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
        <br><label for="marca">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="marca">Marca</label>
            <input type="text" name="marca" id="marca" class="form-control" placeholder="Marca">
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
            <label for="precio_unitario">Precio</label>
            <input type="number" name="precio_unitario" id="precio_unitario" class="form-control" placeholder="Precio">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="nacional">Nacional</label>
            <select name="nacional"  id="nacional" class="form-control" >

                <option>si</option>
                
                <option>no</option>
                
                </select>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <button class="btn btn-primary"type="submit">
                <span class="glyphicon glyphicon-ok"></span>  Guardar</button>
                    <button class="btn btn-danger" type="reset">
                        <span class="glyphicon glyphicon-remove"></span> Vaciar Campos</button>
                            <a class="btn btn-info"type="reset" href="{{url('producto')}}">
                                <span class="glyphicon glyphicon-home"></span>Regresar</a>
</div>
</div>
</div>

{!!Form::close()!!} 

@endsection