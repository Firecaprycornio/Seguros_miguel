<?php
    $usuario = $_GET['borrar_dni'];

		//Establece la conexión con el servidor de la base da tos
		$descriptor = @mysql_connect('localhost', 'root', '');
		//Selecciona la base de datos a usar
		mysql_select_db('aseguradora');
		//Sentencia a ejecutar
		$sentencia = "DELETE FROM empleados WHERE dni= '" . $usuario . "';";

		//Pasa la consulta al servidor y devuelve los registros
		$consulta = mysql_query($sentencia, $descriptor);
		header('Location:sistema.php');
    
?>