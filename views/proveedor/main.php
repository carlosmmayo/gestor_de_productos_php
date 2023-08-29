<?php require "views/contenido/header.php"; ?>
	<div class="contenido-producto">
		<h3 class="p-titulo">Lista de Proveedores</h3>
		<div class="p-nuevo">
			<a href="?controller=proveedor&action=create">Nuevo Proveedor</a>
		</div>
		<div class="p-cont">
			<table class="p-table">
				<thead>
					<tr>
						<th class="p-th">Id</th>
						<th class="p-th">Nombre</th>
						<th class="p-th">Direccion</th>
						<th class="p-th">Telefono</th>
						<th class="p-th">Email</th>
						<th class="p-th">Descripcion</th>
						<th class="p-th">Estado</th>
						<th class="p-th">Fecha creación</th>
						<th class="p-th">Ultima fecha modificacion</th>
						<th class="p-th">Acciones</th>
					</tr>
				</thead>
				<tbody>	
					<?php foreach ($proveedores as $proveedor) : ?>
						<tr>
							<td class="p-td"><?=$proveedor->getProveedor_id() ?></td>
							<td class="p-td"><?=$proveedor->getNombre() ?></td>
							<td class="p-td"><?=$proveedor->getDireccion() ?></td>
							<td class="p-td"><?=$proveedor->getTelefono() ?></td>
							<td class="p-td"><?=$proveedor->getEmail() ?></td>
							<td class="p-td"><?=$proveedor->getDescripcion() ?></td>
							<td class="p-td"><?=$proveedor->getEstado() ?></td>
							<td class="p-td"><?=$proveedor->getFecha_creacion() ?></td>
							<td class="p-td"><?=$proveedor->getUltima_fecha_modificacion() ?></td>
							<td class="p-td">
								<a href="?controller=proveedor&action=edit&proveedor_id=<?=$proveedor->getProveedor_id()?>">Editar</a>
								<a href="?controller=proveedor&action=destroy&proveedor_id=<?=$proveedor->getProveedor_id()?>">Eliminar</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>	
<?php require "views/contenido/footer.php"; ?>