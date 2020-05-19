

<?php
	class conectar{
		public function conexion(){
		$conexion = mysql_connect('localhost',
								  'root',
								  '',
								  'Almacen');
		return $conexion
		}
	}
	$obj = new conectar();

	if($obj -> conexion ()){
		echo "conectado"
	}
 ?>