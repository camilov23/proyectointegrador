<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Factura</title>
    <link rel="stylesheet" href="factura/css/bootstrap.css">
</head>
<body>
<div id="page_pdf">
	<table id="factura_head">
		<tr>
			<td class="logo_factura">
				<div>
					<img src="factura/img/logo.png">
				</div>
			</td>
			<td class="info_empresa">
				<div>
					<b><span class="h2">GARAGE Car Service</span></b>
					<p>Dirección: Calle 15 # 15-55 B/Sucre</p>
					<p>Teléfono: +(57) 3147890654</p>
					<p>Email: facturacion@garage.com</p>
				</div>
			</td>
			<td class="info_factura">
				<div class="round">
					<b><span class="h3">Factura</span></b>
					@foreach ($pedido as $ped)
					<p>No. Factura: <strong> {{ $ped->id_pedido_fact }} </strong></p>
					<p>Fecha: {{$ped->fecha_pedido}}</p>
					<p>Hora: {{$ped->hora}}</p>
					<p>Vendedor: {{$ped->nombre_completo}}</p>
				</div>
			</td>
		</tr>
	</table>
	<table id="factura_cliente">
		<tr>
			<td class="info_cliente">
				<div class="round">
					<b><span class="h3">Cliente</span></b>
					<table class="datos_cliente">
						<tr>
							<td><label>Nit ó CC:</label><p>{{$ped->nro_identificacion}}</p></td>
							<td><label>Teléfono:</label> <p>{{$ped->telefono}}</p></td>
						</tr>
						<tr>
							<td><label>Nombre:</label> <p>{{$ped->nom_cliente}}</p></td>
							<td><label>Dirección:</label> <p>{{$ped->direccion}}</p></td>
						</tr>
					</table>
				</div>
			</td>

		</tr>
	</table>

	<table id="factura_detalle">
			<thead>
				<tr>
					<th width="50px">Cant.</th>
					<th class="textleft">Descripción</th>
					<th class="textright" width="150px">Precio Unitario:</th>
					<th class="textright" width="150px"> Precio Total:</th>
				</tr>
			</thead>
			<tbody id="detalle_productos">
				<tr>
					<td class="textcenter">{{$ped->id_producto}}</td>
					<td>{{$ped->nombre}}</td>
					<td class="textright">{{$ped->subtotal}}</td>
					<td class="textright">{{$ped->subtotal}}</td>
				</tr>
			
			</tbody>
			<tfoot id="detalle_totales">
				<tr>
					<td colspan="3" class="textright"><span><b>SUBTOTAL: </b></span></td>
					<td class="textright"><span></span>{{$ped->subtotal}}</td>
				</tr>
				<tr>
					<td colspan="3" class="textright"><span><b>IVA (19%): </b></span></td>
					<td class="textright"><span>{{$ped->iva}}</span></td>
				</tr>
				<tr>
					<td colspan="3" class="textright"><span><b>TOTAL: </b></span></td>
					<td class="textright"><span>{{$ped->valor_total}}</span></td>
				</tr>
		</tfoot>
	</table>
	<div>
		<h4 class="label_graciass">Metodo pago: {{ $ped->metodo_pago}} </h4>

		<p class="nota">Si usted tiene preguntas sobre esta factura, <br>pongase en contacto con nombre, teléfono y Email</p>
		<h4 class="label_gracias">¡Gracias por su compra!</h4>

	</div>
     @endforeach
</div>

</body>
</html>
