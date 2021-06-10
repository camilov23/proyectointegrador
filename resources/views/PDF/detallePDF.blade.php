<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Pedidos| Sistema de registro</title>
</head>

<body>
    <div class="container">
        <h3 class="text-center">Reporte de pedidos</h3><img src="" alt="" width='100px'><br><br>
        <h1 class="text-center">GENOMA VEHICULOS</h1>
        <h3 class="text-center">NIT: 123456-1</h3>
        <h3 class="text-center">Tel. 09989</h3><br> <br> <br>
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>PEDIDO</th>
                <th>PRODUCTO</th>
                <th>CANTIDAD</th>
              
            </tr>@foreach($pedido_detalle as $pedi)<tr>
                <td>{{$pedi->pedido_factura_id_pedido_fact}}</td>
                <td>{{$pedi->producto_id_producto}}</td>
                <td>{{$pedi->cantidad}}</td>
                
            </tr>@endforeach
        </table>
        <h5 class="text-center">Grupo 511 -Tecnología en Sistemas</h5>
        <h6>Software de Tallerversion 1</h6>
    </div>
</body>

</html>