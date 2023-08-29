<?php

class Proveedor {

	private int $proveedor_id;
	private string $nombre;
	private string $direccion;
	private string $telefono;
	private string $email;
	private string $descripcion;
	private bool $estado;
	private $fecha_creacion;
	private $ultima_fecha_modificacion;

	private $conexion;

	////////////// Constructor //////////////
	public function __CONSTRUCT() {
		$this->conexion = BaseDeDatos::Conexion();
	}

	public function leerProveedores() {
		try {
			$consulta = $this->conexion->prepare("SELECT * FROM proveedores WHERE estado=1;");
			$consulta->execute();
			return $consulta->fetchAll(PDO::FETCH_CLASS,__CLASS__);
		} catch (Exception $e) {
			echo "Falló la consulta leer proveedores: " . $e->getMessage();
		}
	}

	public function crearProveedor() {
		try {
			$consulta = "INSERT INTO proveedores(nombre, direccion, telefono, email, descripcion) VALUES (?,?,?,?,?);";
			$this->conexion->prepare($consulta)
							->execute(array($this->nombre, $this->direccion, $this->telefono, $this->email, $this->descripcion));
			$this->proveedor_id = $this->conexion->lastInsertId(); //Regresa el ultimo id insertado
			return $this; //Devuelve el objeto completo
		} catch (Exception $e) {
			echo "Falló la consulta crear proveedor: " . $e->getMessaje();
		}
	}

	public function consultarId($proveedor_id) {
		try {
			$consulta = "SELECT * FROM proveedores WHERE proveedor_id=? AND estado=1;";
			$consulta = $this->conexion->prepare($consulta);
			$consulta->setFetchMode(PDO::FETCH_CLASS,__CLASS__);
			$consulta->execute(array($proveedor_id));
			return $consulta->fetch(); //fetch devuelve un solo registro
		} catch (Exception $e) {
			echo "Falló la consulta consultar Id: " . $e->getMessaje();
		}		
	}

	public function actualizarProveedor() {
		try {
			$consulta = "UPDATE proveedores SET nombre=?, direccion=?, telefono=?, email=?, descripcion=? WHERE proveedor_id=?;";
			$this->conexion->prepare($consulta)
							->execute(array($this->nombre, $this->direccion, $this->telefono, $this->email, $this->descripcion,  $this->proveedor_id));
		} catch (Exception $e) {
			echo "Falló la consulta actualizar proveedor: " . $e->getMessaje();
		}
	}

	public function desactivarProveedor() {
		try {
			$consulta = "UPDATE proveedores SET estado=0 WHERE proveedor_id=?;";
			$this->conexion->prepare($consulta)
							->execute(array($this->proveedor_id));
		} catch (Exception $e) {
			echo "Falló la consulta desactivar proveeedor: " . $e->getMessaje();
		}
	}

	////////////// Getter y Setter //////////////
	public function getProveedor_id() : ?int {
		return $this->proveedor_id;
	}

	public function setProveedor_id(int $proveedor_id) {
		$this->proveedor_id = $proveedor_id;
	}

	public function getNombre() : ?string {
		return $this->nombre;
	}

	public function setNombre(string $nombre) {
		$this->nombre = $nombre;
	}

	public function getDireccion() : ?string {
		return $this->direccion;
	}

	public function setDireccion(string $direccion) {
		$this->direccion = $direccion;
	}

	public function getTelefono() : ?string {
		return $this->telefono;
	}

	public function setTelefono(string $telefono) {
		$this->telefono = $telefono;
	}

	public function getEmail() : ?string {
		return $this->email;
	}

	public function setEmail(string $email) {
		$this->email = $email;
	}

	public function getDescripcion() : ?string {
		return $this->descripcion;
	}

	public function setDescripcion(string $descripcion) {
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

?>