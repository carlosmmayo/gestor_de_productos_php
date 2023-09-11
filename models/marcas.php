<?php

Class Marca {

	private int $marca_id;
	private String $nombre;
	private String $descripcion;
	private bool $estado;
	private $fecha_creacion;
	private $ultima_fecha_modificacion;

	private $conexion;

	public function __CONSTRUCT() {
		$this->conexion = BaseDeDatos::Conexion();
	}

	public function leerMarcas() {
		try {
			$consulta = $this->conexion->prepare("SELECT * FROM marcas WHERE estado=1;");
			$consulta->execute();
			return $consulta->fetchAll(PDO::FETCH_CLASS,__CLASS__);
		} catch (Exception $e) {
			echo "Falló la consulta leer marcas: " . $e->getMessage();
		}
	}

	public function CrearMarca() {
		try {
			$consulta = "INSERT INTO marcas(nombre, descripcion) VALUES (?,?);";
			$this->conexion->prepare($consulta)
							->execute(array($this->nombre, $this->descripcion));
			$this->marca_id = $this->conexion->lastInsertId(); //Regresa el ultimo id insertado
			return $this; //Devuelve el objeto completo
		} catch (Exception $e) {
			echo "Falló la consulta crear marca: " . $e->getMessaje();
		}
	}

	public function consultarId($marca_id) {
		try {
			$consulta = "SELECT * FROM marcas WHERE marca_id=? AND estado=1;";
			$consulta = $this->conexion->prepare($consulta);
			$consulta->setFetchMode(PDO::FETCH_CLASS,__CLASS__);
			$consulta->execute(array($marca_id));
			return $consulta->fetch(); //fetch devuelve un solo registro
		} catch (Exception $e) {
			echo "Falló la consulta consultar id: " . $e->getMessaje();
		}
	}

	public function actualizarMarca() {
		try {
			$consulta = "UPDATE marcas SET nombre=?, descripcion=? WHERE marca_id=?;";
			$this->conexion->prepare($consulta)
							->execute(array($this->nombre, $this->descripcion, $this->marca_id));
		} catch (Exception $e) {
			echo "Falló la consulta actualizar marca: " . $e->getMessaje();
		}
	}

	public function desactivarMarca() {
		try {
			$consulta = "UPDATE marcas SET estado=0 WHERE marca_id=?;";
			$this->conexion->prepare($consulta)
							->execute(array($this->marca_id));
		} catch (Exception $e) {
			echo "Falló la consulta desactivar marca: " . $e->getMessaje();
		}
	}

	////////////// Getter y Setter //////////////
	public function getMarca_Id() : ?int {
		return $this->marca_id;
	}

	public function setMarca_id(int $marca_id) {
		$this->marca_id = $marca_id;
	}

	public function getNombre() : ?String {
		return $this->nombre;
	}

	public function setNombre(String $nombre) {
		$this->nombre = $nombre;
	}

	public function getDescripcion() : ?String {
		return $this->descripcion;
	}

	public function setDescripcion(String $descripcion) {
		$this->descripcion = $descripcion;
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