<?php



$pagina = "info_administracion.php";
  
if(isset($_GET['item'])) {
	switch($_GET['item']) {
		case 1:
			$pagina = "form_registro_empleado.php";
			break;
		case 2:
			$pagina = "requerimientoAccesoSistema.html";
			break;
		case 3:
			$pagina = "formularioSolicitudViajes.html";
			break;
               case 4:
			$pagina = "formularioReportes.html";
			break;
		  
		default:
			$pagina = "info_administracion.php";
			break;
	}
        
}


$index = new ControlIndex();
$index->set_url_contenido($pagina);
$index->set_menu_actual("administracion");
//$index->index();

?>