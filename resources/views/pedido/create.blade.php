@extends('layouts.plantilla')
@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Pedidos</h3>
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
{!!Form::open(array('url'=>'pedido','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="id_empleado">Empleado</label>
            <input type="number" name="id_empleado" id="id_empleado" class="form-control" placeholder="codigo">
        </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="id_cliente">Cliente</label>
            <input type="number" name="id_cliente" id="id_cliente" class="form-control" placeholder="codigo">
        </div>
</div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="subtotal">Subtotal</label>
            <input type="number" name="subtotal" id="subtotal" class="form-control" placeholder="150000">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="iva">Iva</label>
            <input type="number" name="iva" id="iva" class="form-control" placeholder="20000">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="total">Total</label>
            <input type="number" name="total" id="total" class="form-control" placeholder="1700000" >
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="id_metodo_pago">Metodo de pago</label>
            <select name="id_metodo_pago"  id="id_metodo_pago" class="form-control" >

                <option>Efectivo</option>
                
                <option>Tarjeta</option>
                
                <option>Cheque</option>
                
                </select>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <button class="btn btn-primary"type="submit">
                <span class="glyphicon glyphicon-ok"></span>Guardar</button>
                    <button class="btn btn-danger"type="reset">
                        <span class="glyphicon glyphicon-remove"></span>Vaciar Campos</button>
                            <a class="btn btn-info"type="reset" href="{{url('pedido')}}">
                                <span class="glyphicon glyphicon-home"></span>Regresar</a>
</div>
</div>
</div>

{!!Form::close()!!} 

@endsection