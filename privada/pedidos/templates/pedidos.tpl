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
				<h1>PEDIDOS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formNuveo" method="post" action="pedido_nuevo.php">
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
				<th>NRO</th><th>FECHA PEDIDO</th><th>CLIENTE</th>
				<th><img src="../../imagenes/modificar.png"></th><th><img src="../../imagenes/borrar.png"></th>
			</tr>
			{assign var="b" value='1'}
			{foreach item=r from=$pedidos}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.fecha_pedido}</td>
				<td>{$r.ap} {$r.am} {$r.nombre}</td>
				<td align="center">
					<form name="formModif{$r.id_pedido}" method="post" action="pedido_modificar.php">
						<input type="hidden" name="id_pedido" value="{$r.id_pedido}">
						<input type="hidden" name="id_cliente" value="{$r.id_cliente}">
						<a href="javascript:document.formModif{$r.id_pedido}.submit();" title="Modificar Pedidos">
						Modificar>>	
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi{$r.id_pedido}" method="post" action="pedido_eliminar.php">
						<input type="hidden" name="id_pedido" value="{$r.id_pedido}">
						<a href="javascript:document.formElimi{$r.id_pedido}.submit();" title="Eliminar Pedido" onclick='javascript:return(confirm("Desea realmente Eliminar el pedido:::{$r.id_pedido}?"));'>
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
