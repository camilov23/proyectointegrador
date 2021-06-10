<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Productos| Sistema de registro</title>
</head>

<body>
    <div class="container">
        <h3 class="text-center">Reporte de productos</h3><img src="" alt="" width='100px'><br><br>
        <h1 class="text-center">GENOMAMOTOS</h1>
        <h3 class="text-center">NIT: 123456-1</h3>
        <h3 class="text-center">Tel. 09989</h3><br> <br> <br>
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>GARANTIA</th>
                <th>NOMBRE</th>
                <th>MARCA</th>
                <th>CANTIDAD</th>
                <th>PRECIO</th>
                <th>NACIONAL</th>
            </tr>@foreach($producto as $pro)<tr>
                <td>{{$pro->id_producto}}</td>
                <td>{{$pro->garantia_id_garantia}}</td>
                <td>{{$pro->nombre}}</td>
                <td>{{$pro->marca}}</td>
                <td>{{$pro->cantidad}}</td>
                <td>{{$pro->precio_unitario}}</td>
                <td>{{$pro->nacional}}</td>
            </tr>@endforeach
        </table>
        <h5 class="text-center">Grupo 511 -Tecnología en Sistemas</h5>
        <h6>Software de Tallerversion 1</h6>
    </div>
</body>

</html>