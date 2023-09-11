<?php

class HomeController {

	public function index() {
		require "views/contenido/header.php";
		require_once "views/index.php";
		require "views/contenido/footer.php";
	}

	public function home() {
		require_once "views/acceso.php";
	}
	
}
?>