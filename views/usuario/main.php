<?php require "views/contenido/header.php"; ?>
	<div class="contenido-producto">
		<h3 class="p-titulo">Lista de Usuarios</h3>
		<div class="p-nuevo">
			<a href="?controller=usuario&action=create">Nuevo Usuario</a>
		</div>
		<div class="p-cont">
			<table class="p-table">
				<thead>
					<tr>
						<th class="p-th">Id</th>
						<th class="p-th">Nombre</th>
						<th class="p-th">Apellidos</th>
						<th class="p-th">Identificacion</th>
						<th class="p-th">Telefono</th>
						<th class="p-th">Email</th>
						<th class="p-th">Estado</th>
						<th class="p-th">Fecha creación</th>
						<th class="p-th">Ultima fecha modificacion</th>
						<th class="p-th">Acciones</th>
					</tr>
				</thead>
				<tbody>	
					<?php foreach ($usuarios as $usuario) : ?>
						<tr>
							<td class="p-td"><?=$usuario->getUsuario_id() ?></td>
							<td class="p-td"><?=$usuario->getNombre() ?></td>
							<td class="p-td"><?=$usuario->getApellidos() ?></td>
							<td class="p-td"><?=$usuario->getIdentificacion() ?></td>
							<td class="p-td"><?=$usuario->getTelefono() ?></td>
							<td class="p-td"><?=$usuario->getEmail() ?></td>
							<td class="p-td"><?=$usuario->getEstado() ?></td>
							<td class="p-td"><?=$usuario->getFecha_creacion() ?></td>
							<td class="p-td"><?=$usuario->getUltima_fecha_modificacion() ?></td>
							<td class="p-td">
								<a href="?controller=usuario&action=edit&usuario_id=<?=$usuario->getUsuario_id()?>">Editar</a>
								<a href="?controller=usuario&action=destroy&usuario_id=<?=$usuario->getUsuario_id()?>">Eliminar</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>	
<?php require "views/contenido/footer.php"; ?>