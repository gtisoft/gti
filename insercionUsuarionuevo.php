<?php 
echo "El nombre usuarios es: ".$nom."<br>El apellido paterno es: ".$ap."<br> El apellido materno es : ".$am."<br>El correo es: ".$mailuser."<br>password: ".$pas."<br>";
include("conexion.php");
$sql = "
insert into usuario(nombre_usuario,
apellido_pat_usuario,apellido_mat_usuario,
mail_usuario,password_usuario)
values ('$nom','$ap','$am','$mailuser','$pas') 
";
$modificandoUsuario = pg_query($conexion,$sql);


?>