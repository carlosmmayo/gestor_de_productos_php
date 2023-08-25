<?php require "views/contenido/header.php"; ?>
	<div class="contenido-producto">
		<h3 class="p-titulo">Lista de Productos</h3>
		<div class="p-nuevo">
			<a href="?controller=marca&action=create">Nuevo Producto</a>
		</div>
		<div class="p-cont">
			<table class="p-table">
				<thead>
					<tr>
						<th class="p-th">Id</th>
						<th class="p-th">Nombre</th>
						<th class="p-th">Descripcion</th>
						<th class="p-th">Estado</th>
						<th class="p-th">Fecha creación</th>
						<th class="p-th">Ultima fecha modificacion</th>
						<th class="p-th">Acciones</th>
					</tr>
				</thead>
				<tbody>	
					<?php foreach ($marcas as $marca) : ?>
						<tr>
							<td class="p-td"><?=$marca->getMarca_id() ?></td>
							<td class="p-td"><?=$marca->getNombre() ?></td>
							<td class="p-td"><?=$marca->getDescripcion() ?></td>
							<td class="p-td"><?=$marca->getEstado() ?></td>
							<td class="p-td"><?=$marca->getFecha_creacion() ?></td>
							<td class="p-td"><?=$marca->getUltima_fecha_modificacion() ?></td>
							<td class="p-td">
								<a href="?controller=marca&action=edit&marca_id=<?=$marca->getMarca_id()?>">Editar</a>
								<a href="?controller=marca&action=destroy&marca_id=<?=$marca->getMarca_id()?>">Eliminar</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>	
<?php require "views/contenido/footer.php"; ?>