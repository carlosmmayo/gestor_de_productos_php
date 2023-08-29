<?php require "views/contenido/header.php"; ?>
	<form action="?controller=proveedor&action=store" method="post">
		<div>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre"/>
		</div>	
		<div>
			<label for="direccion">Dirección</label>
			<input type="text" name="direccion"/>
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
			<label for="descripcion">Descripcion</label>
			<input type="text" name="descripcion"/>
		</div>
		<div>
			<input type="submit" value="Guardar"/>
		</div>
	</form>
