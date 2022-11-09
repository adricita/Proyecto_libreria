<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

/*$db->debug=true;*/

$sql = $db->Prepare("SELECT *
					FROM cotizaciones co, empleados e
					WHERE co.id_empleado = e.id_empleado
					AND co.estado <> '0'
					AND e.estado <> '0'
					ORDER BY co.id_cotizacion DESC
					");
$rs = $db->GetAll($sql);

$smarty->assign("cotizaciones",$rs);
$smarty->assign("direc_css",$direc_css);
$smarty->display("cotizaciones.tpl");
?>