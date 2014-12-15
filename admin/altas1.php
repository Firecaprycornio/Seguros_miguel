<?php
		
		$dni = $_GET['dni'];
		$pass = $_GET['pass'];
		$nombre = $_GET['nombre'];
		$apellidos=$_GET['apellidos'];
		$fecha=$_GET['fecha'];
		$dir = $_GET['dir'];
		
		
		

		//Establece la conexión con el servidor de la base datos
		$descriptor = @mysql_connect('localhost', 'root', '');
		//Selecciona la base de datos a usar
		mysql_select_db('aseguradora');
		//Sentencia a ejecutar
		$sentencia = "INSERT INTO empleados  (dni, pass, nombre, apellidos, fecha, direccion) VALUES ( '".$dni."', '".$pass."', '".$nombre."', '".$apellidos."', '".$fecha."', '".$dir."');";
		
		//Pasa la consulta al servidor y devuelve los registros
		$consulta = mysql_query($sentencia,$descriptor);

		if ($consulta != 1) {
		echo "Error al registrar. Ya existe un usuario con ese dni de usuario.";
		echo "<br/>";
		echo "<br/>";
		echo "<a href='sistema.php'>Volver a Login</a>";
		} else {
		echo "Usuario registrado correctamente.";
		echo "<br/>";
		echo "<br/>";
		header("Location:sistema.php");
		}

		
		?>
	