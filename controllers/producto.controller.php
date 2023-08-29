<?php

require_once "models/productos.php";
require_once "models/marcas.php";
class ProductoController {

	private $producto;

	public function __CONSTRUCT() {
		$this->producto = new Producto();
	}

	public function index() {
		$productos = $this->producto->leerProductos();
		$marca = new Marca();
		require "views/producto/main.php";
	}

	public function create() {
		$marca = new Marca();
		$marcas_leer = $marca->leerMarcas();
		require "views/producto/crear.php";
	}

	public function store() {
		$producto = new Producto();
		$producto->setNombre($_POST['nombre']);
		$producto->setDescripcion($_POST['descripcion']);
		$producto->setMarca_id($_POST['marca']);
		$producto->setPrecio_compra($_POST['precio_compra']);
		$producto->setPrecio_venta($_POST['precio_venta']);
		$producto->setCantidad($_POST['cantidad']);
		$producto->crearProducto();
		header('location:?controller=producto');
	}

	public function edit() {
		$producto = new Producto();
		$marca = new Marca();
		$marcas_leer = $marca->leerMarcas();
		$id = isset($_GET['producto_id']);
		if ($id) {
			$producto = $producto->consultarId($_GET['producto_id']);
		}
		require "views/producto/editar.php";
	}

	public function update() {
		$producto = new Producto();
		$id = intval($_POST['producto_id']);
		if ($id) {
			$producto = $producto->consultarId($id);
		}
		$producto->setNombre($_POST['nombre']);
		$producto->setDescripcion($_POST['descripcion']);
		$producto->setMarca_id($_POST['marca']);
		$producto->setPrecio_compra($_POST['precio_compra']);
		$producto->setPrecio_venta($_POST['precio_venta']);
		$producto->setCantidad($_POST['cantidad']);
		$producto->actualizarProducto();
		header('location:?controller=producto');
	}

	public function destroy() {
		$producto = new Producto();
		$producto = $producto->consultarId($_GET['producto_id']);
		$producto->desactivarPoducto();
		header('location:?controller=producto');
	}

}

?>