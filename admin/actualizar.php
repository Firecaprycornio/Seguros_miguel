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
		<h1>Actualizar</h1>
		<hr>
		<?php

if (!isset($_GET['usuario_actualizar'])) {//comprobamos que la variable no está inicializada

		?>

		<hr>
		<div id="contenedorform" >
		<form action="#" method="GET">
			<label>DNI a cambiar:</label>
			<input type="text" name="usuario_actualizar" required size="15"/>
			<br/>
			<br/>
			<br/>
			<br>
			<label>Nuevo DNI:</label>
			<input type="text" name="dni" required size="15"/>
			<br/><br>
			<label>Nuevo nombre:</label>
			<input type="text" name="nombre" required size="15"/>
			<br/><br>
			<label>Nuevo pass:</label>
			<input type="text" name="pass" required size="15"/>
			<br/><br>
			<label>Nueva direccion:</label>
			<input type="text" name="dir" required size="15"/>
			<br/>
			<input class="botonsubmit" type="submit" value="Actualizar" />
			<br/>
			<br/>
			<a href='sistema.php'>Atrás</a>
		</form>
		</div>
		<?php
		} else {

		$usuario_actualizar = $_GET['usuario_actualizar'];

		$dni = $_GET['dni'];
		$nombre = $_GET['nombre'];
		$pass = $_GET['pass'];
		$dir = $_GET['dir'];
		

		//Establece la conexión con el servidor de la base da tos
		$descriptor = @mysql_connect('localhost', 'root', '');
		//Selecciona la base de datos a usar
		mysql_select_db('aseguradora');
		//Sentencia a ejecutar
		$sentencia = "UPDATE empleados SET dni = '" . $dni . "' , nombre = '" . $nombre . "' , pass ='" . $pass . "' , direccion ='" . $dir . "'   WHERE dni = '" . $usuario_actualizar . "';";

		//Pasa la consulta al servidor y devuelve los registros
		$consulta = mysql_query($sentencia, $descriptor);

		echo "Usuario actualizado.";

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