<?php include ("../../controlador/registrar/query.php"); 

	
	$q=new Query(); 
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$q->add_people($_POST['nombre'],$_POST['apellidoP'],$_POST['apellidoM'],$_POST['email'],$_POST['ci'],$_POST['cargo']);
	}
 
			
?>
					
