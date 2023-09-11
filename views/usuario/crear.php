<?php require "views/contenido/header.php"; ?>
	<form action="?controller=usuario&action=store" method="post">
		<div>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre"/>
		</div>
		<div>
			<label for="apellidos">Apellidos</label>
			<input type="text" name="apellidos"/>
		</div>
		<div>
			<label for="identificacion">Identificación</label>
			<input type="number" name="identificacion"/>
		</div>
		<div>
			<label for="telefono">Telefono</label>
			<input type="number" name="telefono"/>
		</div>
		<div>
			<label for="email">Email</label>
			<input type="email" name="email"/>
		</div>
		<div>
			<label for="contrasena">Contraseña</label>
			<input type="password" name="contrasena"/>
		</div>
		<div>
			<input type="submit" value="Guardar"/>
		</div>
	</form>
