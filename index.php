<?php

require_once "models/conexion.php";
if (!isset($_GET['controller'])) {
	require_once "controllers/home.controller.php";
	$controller = new HomeController();
	call_user_func(array($controller, "index"));
} else {
	$controller = $_GET['controller'];
	// Valida Si el controlador no existe, si existe busca el controlador en la carpeta controllers
	// en caso contrario llama al controlador home dentro de la carpeta controllers
	if (!file_exists("controllers/$controller.controller.php")) {
		$controller = 'home';
	}
	require_once "controllers/$controller.controller.php";
	$controller = ucwords($controller)."Controller";
	$controller = new $controller;
	$method = isset($_GET['action']) ? $_GET['action'] : 'index';
	call_user_func(array($controller, $method));
}

?>