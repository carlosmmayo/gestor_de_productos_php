<?php require "views/contenido/header.php";?>
	<form action="?controller=usuario&action=update" method="post">
		<div>
			<input type="hidden" name="usuario_id" value="<?=$usuario->getUsuario_id()?>"/>
		</div>
		<div>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" value="<?=$usuario->getNombre()?>"/>
		</div>
		<div>
			<label for="apellidos">Apellidos</label>
			<input type="text" name="apellidos" value="<?=$usuario->getApellidos()?>"/>
		</div>
		<div>
			<label for="identificacion">Identificación</label>
			<input type="number" name="identificacion" value="<?=$usuario->getIdentificacion()?>"/>
		</div>
		<div>
			<label for="telefono">Telefono</label>
			<input type="number" name="telefono" value="<?=$usuario->getTelefono()?>"/>
		</div>
		<div>
			<label for="email">Email</label>
			<input type="email" name="email" value="<?=$usuario->getEmail()?>"/>
		</div>
		<div>
			<input type="submit" value="Guardar"/>
		</div>
	</form>

