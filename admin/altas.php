<html>
	<head>
		<meta charset="utf-8">
		<title>Altas</title>
	</head>
	<body>

		<h1>Altas</h1>

		<?php

if (!isset($_GET['nombre'])) {//Comprueba que la variable no está inicializada $_GET['nick']

		?>
		<b>Ese usuario no existe, registrese por favor.</b><br/><br>
		<form action="#" method="GET">
			Nuevo DNI:
			<input type="text" name="dni" required/>
			<br/>
			Nuevo nombre:
			<input type="text" name="nombre" required/>
			<br/>
			Nuevo contaseña:
			<input type="text" name="pass" required/>
			<br/>
			Nueva dirección:
			<input type="text" name="dir" required/>
			<br/>
			<input type="submit" value="Registrar" />
			<br/>
			<a href='index.php'>Atrás</a>
		</form>

		<?php

		} else {

		$dni = $_GET['dni'];
		$nombre = $_GET['nombre'];
		$pass = $_GET['pass'];
		$dir = $_GET['dir'];
		

		//Establece la conexión con el servidor de la base da tos
		$descriptor = mysql_connect('localhost', 'root', '');
		//Selecciona la base de datos a usar
		mysql_select_db('tienda');
		//Sentencia a ejecutar
		$sentencia = "INSERT INTO usuarios  (dni, nombre, contrasenia, direccion) VALUES ( '".$dni."', '".$nombre."', '".$pass."', '".$dir."');";

		//Pasa la consulta al servidor y devuelve los registros
		$consulta = mysql_query($sentencia,$descriptor);

		if ($consulta != 1) {
		echo "Error al registrar. Ya existe un usuario con ese dni de usuario.";
		echo "<br/>";
		echo "<br/>";
		echo "<a href='index.php'>Volver a Login</a>";
		} else {
		echo "Usuario registrado correctamente.";
		echo "<br/>";
		echo "<br/>";
		echo "<a href='index.php'>Volver a Login</a>";
		}

		}
		?>
	</body>
</html>
