<?php require "views/contenido/header.php"; ?>
	<form action="?controller=marca&action=update" method="post">
		<div>
			<input type="hidden" name="marca_id" value="<?=$marca->getMarca_id()?>"/>
		</div>
		<div>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" value="<?=$marca->getNombre()?>"/>
		</div>
		<div>
			<label for="descripcion">Descripcion</label>
			<input type="text" name="descripcion" value="<?=$marca->getDescripcion()?>"/>
		</div>
		<div>
			<input type="submit" value="Guardar"/>
		</div>
	</form>

