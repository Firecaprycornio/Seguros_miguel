<!DOCTYPE html>
<html languaje="es">
<head>
	<meta charset="utf-8"/>
	<title>Descargas</title>
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="misestilos.css">
</head>
<body>
<div id="agrupar">
	<header id="cabecera">
		
		<div id="texto"></div>
		<div id="logo"><a href="index.html"><img src="img/logo.jpg" title="Inicio"></a></div>
		
	</header>
	
	
	<br><br><br><br>
	<center>
		<?php
		
			session_start();
			
				echo "Bienvenido " . $_SESSION['nombre'] . "!";
			
			
		
			
			?>
	</center>
	<section id="seccion">
		<h1>Seguros</h1>
		<br>
		Eliga un seguro a presupuestar:

		<br><br><br>
		
		<a href="vida.php"><b>Vida</b></a><br>
		<a href="hogar.php"><b>Hogar</b></a><br>
		<a href="accidentes.php"><b>Accidentes</b></a><br>
		<a href="comunidad.php"><b>Comunidad</b></a><br>
		<a href="salir.php"><b>SALIR</b></a>

	</section>
	
	<footer id="pie">&copy;Copyright by Firecaprycornio</footer>
	</div>
</body>
</html>