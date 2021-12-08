<!DOCTYPE html>
<HTML>
	<head>
		<meta charset="UTF-8" />
		<meta type="author" content="Julio Antonio Ramos Gago"/>
		<meta type="description" content="CRUD de la base de datos minijuegos" />
		<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=0.8, maximum-scale=2.0, minimum-scale=0.8" />
		<title> Administrador de Minijuegos </title>
	</head>
	<body>
		<h1>Agregar nivel</h1>
		<form action="" method="POST">
			<label for="puntuacion">PUNTUACION</label>
			<input type="number" name="puntuacion" /><br />
			<label for="vida">VIDA</label>
			<input type="number" name="vida" /><br />
			<label for="velocidad">VELOCIDAD</label>
			<input type="number" name="velocidad" /><br />
			<label for="bola">BOLA</label>
			<input type="number" name="bola" /><br />
			<input type="submit" name="enviar" value="enviar">
		</form>
		<?php
			require 'metodos_sql.php';

			if (isset($_POST['enviar'])) {
				$conexion = new Conexion();
				$conexion->añadir();
			}
		?>
	</body>
</html>
