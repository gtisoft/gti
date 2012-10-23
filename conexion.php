<?php 
// POSTGRES


$conexion=pg_connect("host=localhost dbname=gtiu port=5432 user=postgres password=admin") or die("Error de conexion a la Base de Datos...");
//$con=pg_connect("localhost=localhost, port=5432 , user=usuario, password=tu_password, dbname=nombre_de_tu_base_de_datos");

if(!$conexion)
{
	echo"ronald No se pudo realizar la conexion ";
	exit;
}
else{
	echo "Conección Satisfactoria!!!";
}

 
?>
