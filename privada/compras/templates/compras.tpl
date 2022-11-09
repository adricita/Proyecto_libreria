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
				<h1>COMPRAS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formNuveo" method="post" action="compra_nuevo.php">
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
				<th>NRO</th><th>FECHA DE COMPRA</th><th>MONTO TOTAL</th><th>PROVEEDOR</th>
				<th><img src="../../imagenes/modificar.png"></th><th><img src="../../imagenes/borrar.png"></th>
			</tr>
			{assign var="b" value='1'}
			{foreach item=r from=$compras}
			<tr>
				<td align="center">{$b}</td>
				<td align="center">{$r.fecha_compra}</td>
				<td align="center">{$r.monto_total}</td>
				<td>{$r.nombre} {$r.apellido}</td>
				<td align="center">
					<form name="formModif{$r.id_compra}" method="post" action="compra_modificar.php">
						<input type="hidden" name="id_compra" value="{$r.id_compra}">
						<input type="hidden" name="id_proveedor" value="{$r.id_proveedor}">
						<a href="javascript:document.formModif{$r.id_compra}.submit();" title="Modificar Compras">
						Modificar>>	
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi{$r.id_compra}" method="post" action="compra_eliminar.php">
						<input type="hidden" name="id_compra" value="{$r.id_compra}">
						<a href="javascript:document.formElimi{$r.id_compra}.submit();" title="Eliminar Compra" onclick='javascript:return(confirm("Desea realmente Eliminar la compra:::{$r.id_compra}?"));'>
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
