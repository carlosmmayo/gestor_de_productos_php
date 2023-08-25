<?php

require_once "models/marcas.php";
class MarcaController {

	private $marca;

	public function __CONSTRUCT() {
		$this->marca = new Marca();
	}

	public function index() {
		$marcas = $this->marca->leerMarcas();
		require "views/marca/main.php";
	}

	public function create() {
		require "views/marca/crear.php";
	}

	public function store() {
		$marca = new Marca();
		$marca->setNombre($_POST['nombre']);
		$marca->setDescripcion($_POST['descripcion']);
		$marca->crearMarca();
		header('location:?controller=marca');
	}

	public function edit() {
		$marca = new Marca();
		$id = isset($_GET['marca_id']);
		if ($id) {
			$marca = $marca->consultarId($_GET['marca_id']);
		}
		require "views/marca/editar.php";
	}

	public function update() {
		$marca = new Marca();
		$id = intval($_POST['marca_id']);
		if ($id) {
			$marca = $marca->consultarId($id);
		}
		$marca->setNombre($_POST['nombre']);
		$marca->setDescripcion($_POST['descripcion']);
		$marca->actualizarMarca();
		header('location:?controller=marca');
	}

	public function destroy() {
		$marca = new Marca();
		$marca = $marca->consultarId($_GET['marca_id']);
		$marca->desactivarMarca();
		header('location:?controller=marca');
	}

}

?>