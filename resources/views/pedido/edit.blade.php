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
{{Form::open(array('action'=>array('pedidosController@update', $pedidos->id_pedido_fact),'method'=>'patch'))}}
<div class="row">


<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="id_empleado">Empleado</label>
            <input type="number" name="id_empleado" id="id_empleado" class="form-control" placeholder="codigo"  value="{{$pedidos->empleado_id_empleado}}">
        </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="id_cliente">Cliente</label>
            <input type="number" name="id_cliente" id="id_cliente" class="form-control" placeholder="codigo"  value="{{$pedidos->cliente_id_cliente}}">
        </div>
</div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="subtotal">Subtotal</label>
            <input type="number" name="subtotal" id="subtotal" class="form-control" placeholder="150000" value="{{$pedidos->subtotal}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="iva">Iva</label>
            <input type="number" name="iva" id="iva" class="form-control" placeholder="20000" value="{{$pedidos->iva}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="valor_total">Total</label>
            <input type="number" name="valor_total" id="valor_total" class="form-control" placeholder="1700000" value="{{$pedidos->valor_total}}">
        </div>
    </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="id_metodo_pago">Metodo de pago</label>
           
            <select name="metodo_pago"  id="metodo_pago" class="form-control" value="{{$pedidos->metodo_pago}}" >

                <option>Efectivo</option>
                
                <option>Tarjeta</option>
                
                <option>Cheque</option>
                
                </select>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <button class="btn btn-primary"type="submit">
                <span class="glyphicon glyphicon-refresh"></span> Actualizar </button>
                    <a class="btn btn-info"type="reset" href="{{url('pedido')}}">
                        <span class="glyphicon glyphicon-home"></span>Regresar </a>
</div>
</div>
</div>
{!!Form::close()!!} 
@endsection