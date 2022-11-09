<?php
/* Smarty version 3.1.36, created on 2022-05-15 03:06:56
  from 'C:\wamp64\www\sis_libreria\privada\templates\cuerpo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62806e500692a1_05876920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '613bdce8ce5a38b03bdf35c0cbb001c868bd88ca' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_libreria\\privada\\templates\\cuerpo.tpl',
      1 => 1652584013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62806e500692a1_05876920 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
</head>
<body>
	<form action="claves/" method="post" target="cuerpo">
		<?php if ($_smarty_tpl->tpl_vars['nick']->value == '') {?>
		<div class="formu_ingreso">
			<center><p><h2>Ingresar al Sistema</h2></p></center>
			<p><h2>Login:</h2><center><input type="text" name="nick" size="25" value="" class="limpiar"></p></center>
			<p><h2>Clave:</h2><center><input type="password" name="password" size="25" value="" ></p></center>
			<input type="submit" name="accion" value="Ingresar" size="5" class="boton">
		</div>
		<?php }?>
	</form>
</body>
</html><?php }
}
