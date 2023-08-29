<?php require "views/contenido/header.php";?>
	<form action="?controller=proveedor&action=update" method="post">
		<div>
			<input type="hidden" name="proveedor_id" value="<?=$proveedor->getProveedor_id()?>"/>
		</div>
		<div>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" value="<?=$proveedor->getNombre()?>"/>
		</div>
		<div>
			<label for="direccion">Dirección</label>
			<input type="text" name="direccion" value="<?=$proveedor->getDireccion()?>"/>
		</div>
		<div>
			<label for="telefono">Telefono</label>
			<input type="number" name="telefono" value="<?=$proveedor->getTelefono()?>"/>
		</div>
		<div>
			<label for="email">Email</label>
			<input type="email" name="email" value="<?=$proveedor->getEmail()?>"/>
		</div>
		<div>
			<label for="descripcion">Descripcion</label>
			<input type="text" name="descripcion" value="<?=$proveedor->getDescripcion()?>"/>
		</div>
		<div>
			<input type="submit" value="Guardar"/>
		</div>
	</form>

