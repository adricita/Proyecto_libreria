<?php
/* Smarty version 3.1.36, created on 2022-05-15 02:53:36
  from 'C:\wamp64\www\sis_libreria\privada\cotizaciones\templates\cotizaciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62806b3003d408_09687945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '639f0f5714845066c33245df0b31091cf91f2c5f' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_libreria\\privada\\cotizaciones\\templates\\cotizaciones.tpl',
      1 => 1649988535,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62806b3003d408_09687945 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
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
			<?php $_smarty_tpl->_assignInScope('b', '1');?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cotizaciones']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_cotizacion'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['apellido'];?>
</td>
				<td align="center">
					<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_cotizacion'];?>
" method="post" action="cotizacion_modificar.php">
						<input type="hidden" name="id_cotizacion" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_cotizacion'];?>
">
						<input type="hidden" name="id_empleado" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_empleado'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_cotizacion'];?>
.submit();" title="Modificar Cotizaciones">
						Modificar>>	
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_cotizacion'];?>
" method="post" action="cotizacion_eliminar.php">
						<input type="hidden" name="id_cotizacion" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_cotizacion'];?>
">
						<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_cotizacion'];?>
.submit();" title="Eliminar Cotizacion" onclick='javascript:return(confirm("Desea realmente Eliminar la cotizacion:::<?php echo $_smarty_tpl->tpl_vars['r']->value['id_cotizacion'];?>
?"));'>
							Eliminar>>
						</a>
					</form>
				</td>
				<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>
		</table>

	</center>
</body>
</html>
<?php }
}
