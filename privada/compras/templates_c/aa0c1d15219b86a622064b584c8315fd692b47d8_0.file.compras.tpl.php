<?php
/* Smarty version 3.1.36, created on 2022-05-15 02:41:38
  from 'C:\wamp64\www\sis_libreria\privada\compras\templates\compras.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6280686288d7a2_02830443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa0c1d15219b86a622064b584c8315fd692b47d8' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_libreria\\privada\\compras\\templates\\compras.tpl',
      1 => 1651192041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6280686288d7a2_02830443 (Smarty_Internal_Template $_smarty_tpl) {
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
			<?php $_smarty_tpl->_assignInScope('b', '1');?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['compras']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_compra'];?>
</td>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['monto_total'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['apellido'];?>
</td>
				<td align="center">
					<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_compra'];?>
" method="post" action="compra_modificar.php">
						<input type="hidden" name="id_compra" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_compra'];?>
">
						<input type="hidden" name="id_proveedor" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_proveedor'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_compra'];?>
.submit();" title="Modificar Compras">
						Modificar>>	
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_compra'];?>
" method="post" action="compra_eliminar.php">
						<input type="hidden" name="id_compra" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_compra'];?>
">
						<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_compra'];?>
.submit();" title="Eliminar Compra" onclick='javascript:return(confirm("Desea realmente Eliminar la compra:::<?php echo $_smarty_tpl->tpl_vars['r']->value['id_compra'];?>
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
