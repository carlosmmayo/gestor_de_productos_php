<?php require "views/contenido/header.php";?>
	<form action="?controller=producto&action=update" method="post">
		<div>
			<input type="hidden" name="producto_id" value="<?=$producto->getProducto_id()?>"/>
		</div>
		<div>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" value="<?=$producto->getNombre()?>"/>
		</div>
		<div>
			<label for="descripcion">Descripcion</label>
			<input type="text" name="descripcion" value="<?=$producto->getDescripcion()?>"/>
		</div>
		<div>
			<label for="marca">Marca</label>
			<select name="marca">
				<?php foreach ($marcas_leer as $marca) : ?>
					<option value="<?=$marca->getMarca_id()?>"> <?=$marca->getNombre()?> </option>
				<?php endforeach; ?>
			</select>
		</div>
		<div>
			<label for="precio_compra">Precio Compra</label>
			<input type="number" name="precio_compra" value="<?=$producto->getPrecio_compra()?>"/>
		</div>
		<div>
			<label for="precio_venta">Precio Venta</label>
			<input type="number" name="precio_venta" value="<?=$producto->getPrecio_venta()?>"/>
		</div>
		<div>
			<label for="cantidad">Cantidad</label>
			<input type="number" name="cantidad" value="<?=$producto->getCantidad()?>"/>
		</div>
		<div>
			<input type="submit" value="Guardar"/>
		</div>
	</form>

