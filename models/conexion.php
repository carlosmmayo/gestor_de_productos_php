<?php

class BaseDeDatos {

	private static $PARAM_host = "localhost";
	private static $PARAM_db_name = "productos";
	private static $PARAM_user = "root";
	private static $PARAM_db_pass = "";
	
	public static function Conexion() {
		try {
			$cone = new PDO('mysql:host='.self::$PARAM_host.';dbname='.self::$PARAM_db_name.';charset=utf8', self::$PARAM_user, self::$PARAM_db_pass);
			$cone->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); // Da manejo de error a la conexion y muestra el error en la exception
			return $cone;
		} catch (PDOException $e) {
			return "Error de Conexion a base de datos: " . $e->getMessage();
		}
	}
}

?>