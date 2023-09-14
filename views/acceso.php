<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Acceso</title>
	<link rel="stylesheet" href="http://localhost/gestorDeProductoss/assets/css/acceso/acceso.css"/>
</head>
<body>
	<div class="contenedor-acceso">
		<div class="contenido-form">
			<h1 class="titulo">Acceso</h1>
			<form action="?controller=usuario&action=acceso" method="post" class="form">
				<div class="form-cont-p">
					<div class="form-cont">
						<label for="email" class="label-acc">Email</label>
						<input type="email" name="email" placeholder="Email" required title="Email" class="input-acc"/>
					</div>
					<div class="form-cont">
						<label for="contrasena" class="label-acc">Contraseña</label>
						<input type="password" name="contrasena" placeholder="Contraseña" required title="Contraseña" class="input-acc"/>
					</div>
					<div class="form-cont">
						<button type="submit">Iniciar Sesion</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>