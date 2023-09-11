<?php

require_once "models/usuarios.php";
class UsuarioController {

	private $usuario;

	public function __CONSTRUCT() {
		$this->usuario = new Usuario();
	}

	public function index() {
		$usuarios = $this->usuario->leerUsuarios();
		require "views/usuario/main.php";
	}

	public function create() {
		require "views/usuario/crear.php";
	}

	public function store() {
		$usuario = new Usuario();
		$usuario->setNombre($_POST['nombre']);
		$usuario->setApellidos($_POST['apellidos']);
		$usuario->setIdentificacion($_POST['identificacion']);
		$usuario->setTelefono($_POST['telefono']);
		$usuario->setEmail($_POST['email']);
		$contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
		$usuario->setContrasena($contrasena);
		$usuario->crearUsuario();
		header('location:?controller=usuario');
	}

	public function edit() {
		$usuario = new Usuario();
		$id = isset($_GET['usuario_id']);
		if ($id) {
			$usuario = $usuario->consultarId($_GET['usuario_id']);
		}
		require "views/usuario/editar.php";
	}

	public function update() {
		$usuario = new Usuario();
		$id = intval($_POST['usuario_id']);
		if ($id) {
			$usuario = $usuario->consultarId($id);
		}
		$usuario->setNombre($_POST['nombre']);
		$usuario->setApellidos($_POST['apellidos']);
		$usuario->setIdentificacion($_POST['identificacion']);
		$usuario->setTelefono($_POST['telefono']);
		$usuario->setEmail($_POST['email']);
		$usuario->actualizarUsuario();
		header('location:?controller=usuario');
	}

	public function destroy() {
		$usuario = new Usuario();
		$usuario = $usuario->consultarId($_GET['usuario_id']);
		$usuario->desactivarUsuario();
		header('location:?controller=usuario');
	}

	public function acceso() {
		$email = $_POST['email'];
		$contrasena = $_POST['contrasena'];
		if ($this->usuario->validar($email,$contrasena)) {
			header('location: index.php');
		} else {
			header('location: index.php?error');
		}
	}

	public function cerrarSession() {
		session_destroy();
		header('location: index.php');
	}

}

?>