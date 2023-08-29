<?php

require_once "models/proveedores.php";
class ProveedorController {

	private $proveedor;

	public function __CONSTRUCT() {
		$this->proveedor = new Proveedor();
	}

	public function index() {
		$proveedores = $this->proveedor->leerProveedores();
		require "views/proveedor/main.php";
	}

	public function create() {
		require "views/proveedor/crear.php";
	}

	public function store() {
		$proveedor = new Proveedor();
		$proveedor->setNombre($_POST['nombre']);
		$proveedor->setDireccion($_POST['direccion']);
		$proveedor->setTelefono($_POST['telefono']);
		$proveedor->setEmail($_POST['email']);
		$proveedor->setDescripcion($_POST['descripcion']);
		$proveedor->crearProveedor();
		header('location:?controller=proveedor');
	}

	public function edit() {
		$proveedor = new Proveedor();
		$id = isset($_GET['proveedor_id']);
		if ($id) {
			$proveedor = $proveedor->consultarId($_GET['proveedor_id']);
		}
		require "views/proveedor/editar.php";
	}

	public function update() {
		$proveedor = new Proveedor();
		$id = intval($_POST['proveedor_id']);
		if ($id) {
			$proveedor = $proveedor->consultarId($id);
		}
		$proveedor->setNombre($_POST['nombre']);
		$proveedor->setDireccion($_POST['direccion']);
		$proveedor->setTelefono($_POST['telefono']);
		$proveedor->setEmail($_POST['email']);
		$proveedor->setDescripcion($_POST['descripcion']);
		$proveedor->actualizarProveedor();
		header('location:?controller=proveedor');
	}

	public function destroy() {
		$proveedor = new Proveedor();
		$proveedor = $proveedor->consultarId($_GET['proveedor_id']);
		$proveedor->desactivarProveedor();
		header('location:?controller=proveedor');
	}

}

?>