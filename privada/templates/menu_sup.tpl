<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{$direc_css}" type="text/css" >
</head>
<body>
	<div class="cabecera">
		<img src="/sis_libreria/imagenes/{$logo_libreria}" width="7%">
		<div class="titulo">
			 "{$nombre}"
		</div>
		<div class="usuario">
			Usuario:<b>{$sesion.usuario}</b>
				Rol:<b>{$sesion.rol}</b>
		</div>
	</div>
</body>
</html>
