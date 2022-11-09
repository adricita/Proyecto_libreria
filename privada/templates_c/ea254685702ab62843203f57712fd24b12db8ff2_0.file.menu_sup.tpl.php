<?php
/* Smarty version 3.1.36, created on 2022-05-15 02:33:00
  from 'C:\wamp64\www\sis_libreria\privada\templates\menu_sup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6280665c14b819_47150575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea254685702ab62843203f57712fd24b12db8ff2' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_libreria\\privada\\templates\\menu_sup.tpl',
      1 => 1652581978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6280665c14b819_47150575 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
</head>
<body>
	<div class="cabecera">
		<img src="/sis_libreria/imagenes/<?php echo $_smarty_tpl->tpl_vars['logo_libreria']->value;?>
" width="7%">
		<div class="titulo">
			 "<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
"
		</div>
		<div class="usuario">
			Usuario:<b><?php echo $_smarty_tpl->tpl_vars['sesion']->value['usuario'];?>
</b>
				Rol:<b><?php echo $_smarty_tpl->tpl_vars['sesion']->value['rol'];?>
</b>
		</div>
	</div>
</body>
</html>
<?php }
}
