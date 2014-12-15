<!DOCTYPE html>
<html languaje="es">
<head>
	<meta charset="utf-8"/>
	<title>Videos</title>
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="misestilos.css">
</head>
<body>
<div id="agrupar">
	<header id="cabecera">
		
		<div id="texto"></div>
		<div id="logo"><a href="index.html"><img src="img/logo.jpg" title="Inicio"></a></div>
		
	</header>
	
	<nav id="menu">
		<div id="menu1">
			<h1>Menu</h1><br>
			<a href="historia.php">Historia</a><br><br>
			<a href="seguros.php">Seguros</a><br><br>
			<a href="presupuestos.php">Presupuestos</a><br><br>
			<a href="descargas.html">Descargas</a><br><br>
		</div>
		
	</nav>
	<br><br><br><br>
	
		
	
	<section id="seccion">
		<?php

if (!isset($_GET['usuario'])) {//

			?>

			<h1>ACCESO EMPLEADOS</h1>

			<div id="contenedorform">
				<form method="get" action="#">
				<label for="dni">Ingrese dni:</label>
				<input type="text" id="dni" name="usuario" size="10">
				<br><br>
				<label for="pass">Ingrese contraseña:</label>
				<input type="password" id="pass" name="pass" size="10">
				<br>
				
				<br>
				<input class="botonsubmit" type="submit" value="confirmar">
				</form>
			</div>
			<u><b>NOTA:</b></u>Si no está logueado pongase en contacto con el administrador.

			<?php

			} else {

			$usuario = $_GET['usuario'];
			
			

			//Establece la conexión con el servidor de la base da tos
			$descriptor = @mysql_connect('localhost', 'root', '');
			//Selecciona la base de datos a usar
			mysql_select_db('aseguradora');
			//Sentencia a ejecutar
			$sentencia = "SELECT * FROM empleados WHERE dni='".$usuario."'";

			//Pasa la consulta al servidor y devuelve los registros
			$consulta = mysql_query($sentencia,$descriptor);

			$registro=mysql_fetch_assoc($consulta);
			
			if(isset($registro['dni']))
			{
			session_start();
				
					$_SESSION['dni'] = $registro['dni'];
					$_SESSION['nombre']=$registro['nombre'];
					$_SESSION['suma']=0;
					header('Location:home.php');
					
					
					
			} else if($usuario=="0000"){
				header('Location:admin/sistema.php');
			}else{
			
			header('Location:admin/altas1.php');
			
			}

			}
			?>

	</section>
	
	<footer id="pie">&copy;Copyright by Firecaprycornio</footer>
	</div>
</body>
</html>