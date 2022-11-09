<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{$direc_css}" type="text/css" >
</head>
<body>
	<form action="claves/" method="post" target="cuerpo">
		{if $nick == ""}
		<div class="formu_ingreso">
			<center><p><h2>Ingresar al Sistema</h2></p></center>
			<p><h2>Login:</h2><center><input type="text" name="nick" size="25" value="" class="limpiar"></p></center>
			<p><h2>Clave:</h2><center><input type="password" name="password" size="25" value="" ></p></center>
			<input type="submit" name="accion" value="Ingresar" size="5" class="boton">
		</div>
		{/if}
	</form>
</body>
</html>