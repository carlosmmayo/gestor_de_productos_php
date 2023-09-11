<h2>Acceso</h2>
<form action="?controller=usuario&action=acceso" method="post">
	<div>
		<label for="email">Email</label>
		<input type="email" name="email" require/>
	</div>
	<div>
		<label for="contrasena">Contraseña</label>
		<input type="password" name="contrasena" require/>
	</div>
	<div>
		<input type="submit" value="Iniciar Sesion"/>
	</div>
</form>