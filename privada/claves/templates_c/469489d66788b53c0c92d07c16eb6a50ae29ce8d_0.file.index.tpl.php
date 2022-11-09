<?php
/* Smarty version 3.1.36, created on 2022-05-15 02:42:54
  from 'C:\wamp64\www\sis_libreria\privada\claves\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_628068ae09c977_70538775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '469489d66788b53c0c92d07c16eb6a50ae29ce8d' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_libreria\\privada\\claves\\templates\\index.tpl',
      1 => 1652581825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628068ae09c977_70538775 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<?php echo '<script'; ?>
 type="text/javascript">
		function refrescar (){
			var p = window.parent;
			p.location.href='../';
		}
	<?php echo '</script'; ?>
>
</head>
<body ONLOAD="self.setTimeout('refrescar()',5000);"> 
	<center>
		<h1><?php echo $_smarty_tpl->tpl_vars['mensage']->value;?>
</h1>
		<h3 style="color:#eb19827d;"><?php echo $_smarty_tpl->tpl_vars['nom_completo']->value;?>
</h3>
		<h1><?php echo $_smarty_tpl->tpl_vars['mensage1']->value;?>
</h1>
	</center>
</body>
</html><?php }
}
