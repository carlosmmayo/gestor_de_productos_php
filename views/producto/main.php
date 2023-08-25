<?php require "views/contenido/header.php"; ?>
	<div class="contenido-producto">
		<h3 class="p-titulo">Lista de Productos</h3>
		<div class="p-nuevo">
			<a href="?controller=producto&action=create">Nuevo Producto</a>
		</div>
		<div class="p-cont">
			<table class="p-table">
				<thead>
					<tr>
						<th class="p-th">Id</th>
						<th class="p-th">Nombre</th>
						<th class="p-th">Descripcion</th>
						<th class="p-th">marca</th>
						<th class="p-th">Precio Compra</th>
						<th class="p-th">Precio Venta</th>
						<th class="p-th">Cantidad</th>
						<th class="p-th">Estado</th>
						<th class="p-th">Fecha creación</th>
						<th class="p-th">Ultima fecha modificacion</th>
						<th class="p-th">Acciones</th>
					</tr>
				</thead>
				<tbody>	
					<?php foreach ($productos as $producto) : ?>
						<tr>
							<td class="p-td"><?=$producto->getProducto_id() ?></td>
							<td class="p-td"><?=$producto->getNombre() ?></td>
							<td class="p-td"><?=$producto->getDescripcion() ?></td>
							<td class="p-td"><?=$marca->consultarId($producto->getMarca_id())->getNombre() ?></td>
							<td class="p-td"><?=$producto->getPrecio_compra() ?></td>
							<td class="p-td"><?=$producto->getPrecio_venta() ?></td>
							<td class="p-td"><?=$producto->getCantidad() ?></td>
							<td class="p-td"><?=$producto->getEstado() ?></td>
							<td class="p-td"><?=$producto->getFecha_creacion() ?></td>
							<td class="p-td"><?=$producto->getUltima_fecha_modificacion() ?></td>
							<td class="p-td">
								<a href="?controller=producto&action=edit&producto_id=<?=$producto->getProducto_id()?>">Editar</a>
								<a href="?controller=producto&action=destroy&producto_id=<?=$producto->getProducto_id()?>">Eliminar</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>	
<?php require "views/contenido/footer.php"; ?>