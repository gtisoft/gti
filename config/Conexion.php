<?php
class Conexion {
		
	private $enlace;
	private static $conexion;

	function Conexion() {
	   // include_once './config.php';
      if(self::$conexion == NULL) {
        $this->enlace = pg_connect("host=localhost port=5432 user=postgres password=postgres dbname=lactobar");
        self::$conexion=$this->enlace;
      }else {
        $this->enlace = self::$conexion;
      }
	}

	function consultar($sql){
		$consulta = pg_query($this->enlace,$sql);
		return $consulta;
	}

  function cerrar() {
    pg_close($this->enlace);
  }
	
  function sePuedeConectar() {
    return $this->enlace;  
  }
  
}
?>