<!DOCTYPE html>
<html languaje="es">
<head>
	<meta charset="utf-8"/>
	<title>Administrador</title>
	<link rel="stylesheet" type="text/css" href="../reset.css">
	<link rel="stylesheet" type="text/css" href="../misestilos.css">
</head>
<body>
<div id="agrupar">
	<header id="cabecera">
		
		<div id="texto"></div>
		<div id="logo"><a href="index.html"><img src="../img/logo.jpg" title="Inicio"></a></div>
		
	</header>
	
	
	<br><br><br><br>
	
	<section id="seccion">
		<h1>Bajas</h1>
	
			<?php

if (!isset($_GET['usuario_borrar'])) {//comprobamos que no está inicializado

		?>

		<hr>

		<form action="#" method="GET">
			Introduzca el dni del usuario que desee borrar:
			<input type="text" name="usuario_borrar" required autofocus/>
			<input type="submit" value="Borrar" />
			<br/>
			<br/>
			<a href='sistema.php'>Atrás</a>
		</form>

		<?php
		} else {

		$usuario = $_GET['usuario_borrar'];

		//Establece la conexión con el servidor de la base da tos
		$descriptor = @mysql_connect('localhost', 'root', '');
		//Selecciona la base de datos a usar
		mysql_select_db('aseguradora');
		//Sentencia a ejecutar
		$sentencia = "DELETE FROM empleados WHERE dni= '" . $usuario . "';";

		//Pasa la consulta al servidor y devuelve los registros
		$consulta = mysql_query($sentencia, $descriptor);

		echo "<br/><br/>";
		echo "Usuario eliminado.";

		echo "<br/>";
		echo "<br/>";
		echo "<a href='sistema.php'>Volver a Usuarios</a>";

		}
		?>
	</section>
	
	<footer id="pie">&copy;Copyright by Firecaprycornio</footer>
	</div>
</body>
</html>