<?php require "views/contenido/header.php"; ?>
	<form action="?controller=marca&action=store" method="post">
		<div>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre"/>
		</div>
		<div>
			<label for="descripcion">Descripcion</label>
			<input type="text" name="descripcion"/>
		</div>
		<div>
			<input type="submit" value="Guardar"/>
		</div>
	</form>
