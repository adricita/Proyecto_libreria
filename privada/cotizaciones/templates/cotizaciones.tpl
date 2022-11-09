<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">

</head>
<body>
	<table width="100%" border="0">
		<tr>
			<td width="33%">
				<table border="0">
					<tr>
					</tr>
				</table>
			</td>
			<td align="center" width="33%">
				<h1>COTIZACIONES</h1>
			</td>
			<td align="right" width="33%">
				<form name="formNuveo" method="post" action="cotizacion_nuevo.php">
					<a href="javascript:document.formNuveo.submit();">
						Nuevo>>>
					</a>
				</form>
			</td>
		</tr>
	</table>

	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>FECHA COTIZACION</th><th>EMPLEADO</th>
				<th><img src="../../imagenes/modificar.png"></th><th><img src="../../imagenes/borrar.png"></th>
			</tr>
			{assign var="b" value='1'}
			{foreach item=r from=$cotizaciones}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.fecha_cotizacion}</td>
				<td>{$r.nombre} {$r.apellido}</td>
				<td align="center">
					<form name="formModif{$r.id_cotizacion}" method="post" action="cotizacion_modificar.php">
						<input type="hidden" name="id_cotizacion" value="{$r.id_cotizacion}">
						<input type="hidden" name="id_empleado" value="{$r.id_empleado}">
						<a href="javascript:document.formModif{$r.id_cotizacion}.submit();" title="Modificar Cotizaciones">
						Modificar>>	
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi{$r.id_cotizacion}" method="post" action="cotizacion_eliminar.php">
						<input type="hidden" name="id_cotizacion" value="{$r.id_cotizacion}">
						<a href="javascript:document.formElimi{$r.id_cotizacion}.submit();" title="Eliminar Cotizacion" onclick='javascript:return(confirm("Desea realmente Eliminar la cotizacion:::{$r.id_cotizacion}?"));'>
							Eliminar>>
						</a>
					</form>
				</td>
				{assign var="b" value="`$b+1`"}
				{/foreach}
			</tr>
		</table>

	</center>
</body>
</html>
