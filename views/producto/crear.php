<?php require "views/contenido/header.php"; ?>
	<form action="?controller=producto&action=store" method="post">
		<div>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre"/>
		</div>
		<div>
			<label for="descripcion">Descripcion</label>
			<input type="text" name="descripcion"/>
		</div>
		<div>
			<label for="marca">Marca</label>
			<select name="marca">
				<option>Seleccione una marca</option>
				<?php foreach ($marcas_leer as $marca) : ?>
					<option value="<?=$marca->getMarca_id()?>"> <?=$marca->getNombre()?> </option>
				<?php endforeach; ?>
			</select>
		</div>
		<div>
			<label for="precio_compra">Precio Compra</label>
			<input type="number" name="precio_compra"/>
		</div>
		<div>
			<label for="precio_venta">Precio Venta</label>
			<input type="number" name="precio_venta"/>
		</div>
		<div>
			<label for="cantidad">Cantidad</label>
			<input type="number" name="cantidad"/>
		</div>
		<div>
			<input type="submit" value="Guardar"/>
		</div>
	</form>
