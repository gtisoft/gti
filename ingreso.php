<style type="text/css">
<!--
body {
	background-color: #FFFFCC;
}
.Estilo1 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style><?php 
echo "El correo de usuarios es: ".$mailuser." El pasword es: ".$pas;
echo "<br />";
include("conexion.php");

$ListaUsuarios=pg_query($conexion,"select mail_usuario,password_usuario from usuario"); // Realizando la consulta a la BD
$tamUsuarios=pg_num_rows($ListaUsuarios);// tamaño de tuplas de la consulta a la BD
/*$sql = "
update usuario
set estado='conectado'
where contrasena='$pas'
";
*/
?>
<?php 
 $ban=0;
for ($i=0;$i<$tamUsuarios;$i++)
   { 
   $usuario= pg_result($ListaUsuarios,$i,"mail_usuario"); 
	   $pasword=pg_result($ListaUsuarios,$i,"password_usuario");
	   if($pas==$pasword)
	    {  
		   // $modificandoAlumno = pg_query($conexion,$sql);
			$ban=1;
			echo "El USUARIO FUE ENCONTRADO TIENE INGRESO";
			echo"<br>";
			echo"<a href='Principal.php' target='_parent'>Pagina Principal</a>";
		 } 		
	} // del for
	 if($ban==0)
		     { echo "El USUARIO NO FUE ENCONTRADO NO TIENE INGRESO";}
?>

</body>
<div align="right" class="Estilo1">serrar sesion</div>
</html>