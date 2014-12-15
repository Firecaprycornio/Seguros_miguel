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

if (!isset($_GET['modificar_dni'])) {//comprobamos que la variable no está inicializada

		?>

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
	
		<?php
		} else {
			
		?>
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
	<?php
	if(isset($_GET['dni1']))
	{
		
	
		$usuario_actualizar = $_GET['modificar_dni'];

		$dni = $_GET['dni1'];
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
else{
	$act_dni=$_GET['modificar_dni'];
	?>
	<hr>
		<div id="contenedorform" >
		<form action="altas1.php" method="GET">
			
			<label>Nuevo DNI:</label>
			<input type="text" name="dni1" required size="15"/>
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
			<?php echo "<input type='hidden' name='act_dni' value='".$act_dni."' />";
			<input class="botonsubmit" type="submit" value="Actualizar" />
			<br/>
			<br/>
			
		</form>
		</div>
	</section>	
	<?php
}
		}
		?>
	</section>
	
	<footer id="pie">&copy;Copyright by Firecaprycornio</footer>
	</div>
</body>
</html>