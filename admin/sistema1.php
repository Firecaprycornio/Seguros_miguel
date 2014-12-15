<!DOCTYPE html>
<html languaje="es">
<head>
	<meta charset="utf-8"/>
	<title>Administrador</title>
	<link rel="stylesheet" type="text/css" href="../reset.css">
	<link rel="stylesheet" type="text/css" href="../misestilos.css">
	<style>
		#altas{
			float: right;
			border: 1px solid;
			border-radius: 20px;
			text-decoration: none;
			padding: 5px;
			margin-left:50px;
			color:#E6C177;
			background: #25319D;
			font-size: 20px;
			text-align: right;
		}
		#seccion9{
			 float: left;
			 width: 495px;
			 margin-left: 250px;
			 font: bold 14px arial, sans-serif;
			 color:#51725C;
			 border: 1px solid;
			 border-radius: 20px;
			 text-align: center;
			 background: #25319D;
			 color:#E6C177;
			 margin-top: 10px;
			 margin-bottom: 40px;
			 padding: 20px;
			 position: center;
			 text-decoration: none;
		}
		#seccion9 h1{
		 	font-size: 30px;
		 }
		 #seccion9 h2{
		 	font-size: 20px;
		 }
		 #seccion9 a{
		 	color: #E6C177;
		 	text-decoration: none;
		 }
		 #seccion9 a:hover{
		 	color:red;
		 }
		 #seccion9 table tr td{
		 	border: 1px solid #000000;
		 	
		 	
		 }
	</style>
</head>
<body>
<div id="agrupar">
	<header id="cabecera">
		
		<div id="texto"></div>
		<div id="logo"><a href="index.html"><img src="../img/logo.jpg" title="Inicio"></a></div>
		
	</header>
	
	
	<br><br><br><br>
	
	<section id="seccion9">
		<?php

			session_start();
			//echo "Bienvenido " . $_SESSION['dni'] . "!";
		
			
			?>
			<h1>Formulario Administrador</h1>
			
			<br/>

			<?php

			//Establece la conexión con el servidor de la base datos
			$descriptor = @mysql_connect('localhost', 'root', '');
			
			//Selecciona la base de datos a usar
			mysql_select_db('aseguradora');
			//Sentencia a ejecutar
			$sentencia = "SELECT * FROM empleados order by 1;";

			//Pasa la consulta al servidor y devuelve los registros
			$consulta = mysql_query($sentencia, $descriptor);
			?>
			<center>
			<br><br><br><br><br><br/><br/><h2>LISTADO</h2><br/><br/>
			
	
			<a href='altas1.php' align="right" id="altas">Altas</a>
			
		
			
			
			
			
			<br/>
			</center>
			<table border='1' cellspacing='0' cellpadding='0' >
			<tr bgcolor='#9FA8FA'>
			<td>Dni</td><td>Pass</td><td>Nombre</td><td>Apellidos</td><td>Fecha</td><td>Direccion</td>
			</tr>
			<?php
			while ($registro = mysql_fetch_assoc($consulta)) {?>
				<tr bgcolor="#6E6E6E">
				<td > <?php echo $registro['dni']; ?></td>
				<td> <?php echo $registro['pass']; ?></td>
				<td> <?php echo $registro['nombre']; ?></td>
				<td> <?php echo $registro['apellidos']; ?></td>
				<td> <?php echo $registro['fecha']; ?></td>
				<td> <?php echo $registro['direccion']; ?></td>
				<td> <?php echo "<form action='borrar.php' method='get'> <input type='submit' name='borrar' value='borrar'> "; ?></td>
				<td> <?php echo "<input type='hidden' name='borrar_dni' value='".$registro['dni']."'></form>"; ?></td>
				<td> <?php echo "<form action='#' method='get'> <input type='submit' name='actualizar' value='Modificar'> "; ?></td>
				<td> <?php echo "<input type='hidden' name='modificar_dni' value='".$registro['dni']."'></form>"; ?></td>
				
				
				</tr>
			<?php } ?>
			</table>
			<br><br><br>
		<a href="../index.php">VOLVER</a>	
		
	</section>
	
	<footer id="pie">&copy;Copyright by Firecaprycornio</footer>
	</div>
</body>
</html>