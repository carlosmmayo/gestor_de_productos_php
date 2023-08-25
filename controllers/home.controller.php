<?php

class HomeController {

	function index() {
		require "views/contenido/header.php";
		require_once "views/index.php";
		require "views/contenido/footer.php";
	}


}


?>