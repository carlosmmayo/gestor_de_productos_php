<?php

class Producto {

	private int $producto_id;
	private string $nombre;
	private string $descripcion;
	private int $marca_id;
	private float $precio_compra;
	private float $precio_venta;
	private int $cantidad;
	private bool $estado;
	private $fecha_creacion;
	private $ultima_fecha_modificacion;

	private $conexion;

	////////////// Constructor //////////////
	public function __CONSTRUCT() {
		$this->conexion = BaseDeDatos::Conexion();
	}

	public function leerProductos() {
		try {
			$consulta = $this->conexion->prepare("SELECT * FROM productos WHERE estado=1;");
			$consulta->execute();
			return $consulta->fetchAll(PDO::FETCH_CLASS,__CLASS__);
			//return $consulta->fetchAll(PDO::FETCH_CLASS,"Producto");
		} catch (Exception $e) {
			echo "Falló la consulta leer productos: " . $e->getMessage();
		}
	}

	public function crearProducto() {
		try {
			$consulta = "INSERT INTO productos(nombre, descripcion, marca_id, precio_compra, precio_venta, cantidad) VALUES (?,?,?,?,?,?);";
			$this->conexion->prepare($consulta)
							->execute(array($this->nombre, $this->descripcion, $this->marca_id, $this->precio_compra, $this->precio_venta, $this->cantidad));
			$this->producto_id = $this->conexion->lastInsertId(); //Regresa el ultimo id insertado
			return $this; //Devuelve el objeto completo
		} catch (Exception $e) {
			echo "Falló la consulta crear productos: " . $e->getMessaje();
		}
	}

	public function consultarId($producto_id) {
		try {
			$consulta = "SELECT * FROM productos WHERE producto_id=? AND estado=1;";
			$consulta = $this->conexion->prepare($consulta);
			$consulta->setFetchMode(PDO::FETCH_CLASS,__CLASS__);
			$consulta->execute(array($producto_id));
			return $consulta->fetch(); //fetch devuelve un solo registro
		} catch (Exception $e) {
			echo "Falló la consulta consultar id: " . $e->getMessaje();
		}		
	}

	public function actualizarProducto() {
		try {
			$consulta = "UPDATE productos SET nombre=?, descripcion=?, marca_id=?, precio_compra=?, precio_venta=?, cantidad=? WHERE producto_id=?;";
			$this->conexion->prepare($consulta)
							->execute(array($this->nombre, $this->descripcion, $this->marca_id, $this->precio_compra, $this->precio_venta, $this->cantidad, $this->producto_id));
		} catch (Exception $e) {
			echo "Falló la consulta actualizar producto: " . $e->getMessaje();
		}
	}

	/*
	* El metodo desactivarPoducto() cambia el estado del registro en la base de datos a 0
	* Que es como eliminar un registro en la base de datos pero el registro se conserva en la base de datos 
	*/
	public function desactivarPoducto() {
		try {
			$consulta = "UPDATE productos SET estado=0 WHERE producto_id=?;";
			$this->conexion->prepare($consulta)
							->execute(array($this->producto_id));
		} catch (Exception $e) {
			echo "Falló ejecutando la consulta: " . $e->getMessaje();
		}
	}

	////////////// Getter y Setter //////////////
	public function getProducto_id() : ?int {
		return $this->producto_id;
	}

	public function setProducto_id(int $producto_id) {
		$this->producto_id = $producto_id;
	}

	public function getNombre() : ?string {
		return $this->nombre;
	}

	public function setNombre(string $nombre) {
		$this->nombre = $nombre;
	}

	public function getDescripcion() : ?string {
		return $this->descripcion;
	}

	public function setDescripcion(string $descripcion) {
		$this->descripcion = $descripcion;
	}

	public function getMarca_id() : ?int {
		return $this->marca_id;
	}

	public function setMarca_id(int $marca_id) {
		$this->marca_id = $marca_id;
	}

	public function getPrecio_compra() : ?float {
		return $this->precio_compra;
	}

	public function setPrecio_compra(float $precio_compra) {
		$this->precio_compra = $precio_compra;
	}

	public function getPrecio_venta() : ?float {
		return $this->precio_venta;
	}

	public function setPrecio_venta(float $precio_venta) {
		$this->precio_venta = $precio_venta;
	}

	public function getCantidad() : ?int {
		return $this->cantidad;
	}

	public function setCantidad(int $cantidad) {
		$this->cantidad = $cantidad;
	}

	public function getEstado() : ?bool {
		return $this->estado;
	}

	public function setEstado(bool $estado) {
		$this->estado = $estado;
	}

	public function getFecha_creacion() {
		return $this->fecha_creacion;
	}

	public function getUltima_fecha_modificacion() {
		return $this->ultima_fecha_modificacion;
	}

}

?>