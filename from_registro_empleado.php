<script>
				function validar_texto(e){
					tecla = (document.all) ? e.keyCode : e.which;

					//Tecla de retroceso para borrar, siempre la permite
						if ((tecla==8) || (tecla== 37)||(tecla == 39)){
						return true;
									}
        
						// Patron de entrada, en este caso solo acepta numeros
							patron =/[0-9]/;
    
						tecla_final = String.fromCharCode(tecla);
    
							return patron.test(tecla_final);
				}
</script>
				
<script>		
		
	function permite(elEvento, permitidos) {
  // Variables que definen los caracteres permitidos
  var numeros = "0123456789";
  var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
  var numeros_caracteres = numeros + caracteres;
  var teclas_especiales = [8, 37, 39, 46,09];
  // 8 = BackSpace, 46 = Supr, 37 = flecha izquierda, 39 = flecha derecha
 
 
  // Seleccionar los caracteres a partir del parámetro de la función
  switch(permitidos) {
    case 'num':
      permitidos = numeros;
      break;
    case 'car':
      permitidos = caracteres;
      break;
    case 'num_car':
      permitidos = numeros_caracteres;
      break;
  }
 
  // Obtener la tecla pulsada 
  var evento = elEvento || window.event;
  var codigoCaracter = evento.charCode || evento.keyCode;
  var caracter = String.fromCharCode(codigoCaracter);
 
  // Comprobar si la tecla pulsada es alguna de las teclas especiales
 


 // (teclas de borrado y flechas horizontales)
  var tecla_especial = false;
  for(var i in teclas_especiales) {
    if(codigoCaracter == teclas_especiales[i]) {
      tecla_especial = true;
      break;
    }
  }
 
  // Comprobar si la tecla pulsada se encuentra en los caracteres permitidos
  // o si es una tecla especial
  return permitidos.indexOf(caracter) != -1 || tecla_especial;
}

		</script>		

<form  name = "formulario" method="POST" action="registrar_empleado.php"  autocomplete="on">
	<div class="form" width= "350" align="center">
		<h1>Registro  De Empleados</h1> 
			<legend>Datos Personales</legend>

		<table border="0" width= "350" align="center">
  
			<tr>
				<td>Nombre: * </td>
				<td> <input type="text" name="nombre" size="30" maxlength="30"  required="required" onkeypress="return permite(event, 'car')" placeholder="Coloque el nombre del empleado"/></td>
			</tr>
  
			<tr>
				<td>Apellidos Paterno *</td>
				<td><input type="text" name="apellidoP" size="30" maxlength="30" required="required" onkeypress="return permite(event, 'car')" placeholder="Coloque apellido Paterno"/></td>
			</tr>
  
			<tr>
				<td>Apellido Materno</td>
				<td><input type="text" name="apellidoM" size="30" maxlength="35" required="required" onkeypress="return permite(event, 'car')" placeholder="Coloque apellido Materno"/></td>
    
			</tr>
		
			<tr>
				<td>   Ci*</td>
				<td><input type="text" name ="ci" size="30" maxlength="30" required="required" onkeypress="return validar_texto(event)" placeholder="Ej: 7939541"/></td>
			</tr>
  
			<tr>
				<td>   Cargo</td>
				<td>
					<select name="cargo">
						<option  value="Cajero">presidencia ejecutiva</option>
						<option value="Cocinero">direccion general auditoria</option>
						<option value="Mesero">relaciones internacionales</option>
						<option value="Encargado de mesas">unidad transparencia instituacional</option>												
						<option value="Mesero">direccion recursos humanos</option>
						<option value="Mesero">direccion tecnologias de informacion</option>
						<option value="Mesero">gerencia nacional palnificacion e inversiones</option>
						<option value="Mesero">gerencia empresas sudsidiarias</option>
						<option value="Mesero">gerencia nacional de seguridad, salud, ambiente</option>
						<option value="Mesero">direccion planificacion y organizacion</option>
						<option value="Mesero">direccion administrativa</option>
						<option value="Mesero">direccion de finanzas</option>
						<option value="Mesero">direccion seguiridad y salud ocupacional</option>
						<option value="Mesero">direccion medio ambiente</option>		
					</select>
				</td>
			</tr>
  
			<tr>
				<td> Email *</td>
				<td><input type="text" name="email" size="30" maxlength="30"class="in_reg" required="required" placeholder="ejemplo@hotmail.com"/></td>
			</tr>
			<tr>
				<td><input class="button" type="submit" value="Registrar" /></td>
				<td><input class="button" type = "reset" value = "Limpiar" /> </td>
			</tr>
		</table>
	</div>
</form> 

