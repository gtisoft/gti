<?php
	include ("registro.php");
	
	class Query
	{

		function add_people($name, $ap_pat, $ap_mat,$email, $password,$cargo)
		{
			$conn = pg_connect("host=localhost dbname=gtiu port=5432 user=postgres password=admin");
 
			if ($conn) {
				$result = pg_query($conn, "INSERT INTO usuario (nombre_usuario,apellido_pat_usuario,apellido_mat_usuario,mail_usuario,password_usuario) 
				                             VALUES('$name','$ap_pat', '$ap_mat','$email', '$password')");
			}
			else
			{
				echo "Conexión Erronea";
				exit;
			}
			//$consulta_empleado="SELECT id_rol FROM rol WHERE nombre_rol = '$cargo'";
			//$resultado_empleado=$this->consultar($consulta_empleado);
			//$ci_empleado = pg_fetch_Array($resultado_empleado);
			//$ci_Empleado=$ci_empleado['id_rol'];
			
			
		}
		function add_rol_empleado($cargo) {
			$result = pg_query($conn, "INSERT INTO rol_usuario(id_usuario,id_rol) 
			        VALUES('$id_usuario','$id_rol')");
		}
		
	}
?>
