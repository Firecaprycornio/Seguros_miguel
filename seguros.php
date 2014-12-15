<!DOCTYPE html>
<html languaje="es">
<head>
	<meta charset="utf-8"/>
	<title>Seguros</title>
	
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="misestilos.css">
	<script src="Jquery/jquery-1.10.2.js"></script>
	<script src="Jquery/jquery-1.10.2.min.js"></script>
	
	<script>
		$(function(){
			$("#im1").hover(function(){
				$("#vida").show(500);
			},function(){
				$("#vida").hide();
			});
			$("#im2").hover(function(){
				$("#hogar").show(500);
			},function(){
				$("#hogar").hide();
			});
			$("#im3").hover(function(){
				$("#accidentes").show(500);
			},function(){
				$("#accidentes").hide();
			});
			$("#im4").hover(function(){
				$("#comunidades").show(500);
			},function(){
				$("#comunidades").hide();
			});
		});
	</script>
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
	<aside id="columna">
	<ul>
		
		<li><img id="im1" src="img/10.jpg"></li><br>
		<li><img id="im2" src="img/11.jpg"></li><br>
		<li><img id="im3" src="img/12.jpg"></li><br>
		<li><img id="im4" src="img/13.png"></li>
	</ul>
		
	</aside>
	
	<section id="seccion1">
					
		<h1>Seguros</h1>
		<div id="vida" hidden>
			<h2>Seguro de hogar</h2>
			<br><br><h3>1. ¿Qué coberturas tengo? ¿Me lo cubre todo?</h3>
			Las coberturas son muchas y variadas: incendio, explosión, robo, roturas, aguas, responsabilidad civil, etc. de ahí lo del término “multirriesgo”.
			<br><br><h3>2. ¿Qué capital tengo que contratar para mi vivienda?</h3>
			Debemos incluir la totalidad de los bienes que sean asegurables, tanto de continente como de contenido, y los debemos asegurar por el precio que nos costaría reponerlos como nuevos.
			

 

		</div>
		<div id="hogar" hidden>
			<h2>Seguro de vida</h2>
			<br><br><h3>1. ¿Qué se entiende por Seguro de Vida?</h3>
			Un Seguro de vida es un contrato por el cual el asegurado se compromete a un pago periódico (prima) para recibir por parte de la aseguradora una contraprestación, en este caso el pago de un capital en caso de que suceda un situación de riesgo determinada que active el cumplimiento del contrato.
			<br><br><h3>2. ¿Quién necesita un Seguro Universal Vida Temporal?</h3>
			Los destinatarios de este seguro de vida son diversos, ya que está orientado a aquellas personas que deseen cuidar del bienestar de sus familias ante posibles imprevistos.
			<br><br><h3>3. ¿Qué garantías me ofrece?</h3>
			El Seguro Universal Vida Temporal, garantiza el pago de un capital al beneficiario designado en el momento de producirse el fallecimiento del asegurado.
		</div>
		<div id="accidentes" hidden>
			<h2>Seguro de accidentes</h2>
			<br><br><h3>1. ¿Quién necesita un seguro de Accidentes?</h3>
El seguro accidentes individual está indicado para aquella persona que tiene la necesidad de cubrir los riesgos derivados principalmente de un accidente corporal, que cause lesiones o fallecimiento, o la prestación de servicios adicionales por causa de accidente, en cualquier circunstancia y lugar.
			<br><br><h3>2. ¿Qué cobertura me ofrece?</h3>
			Muerte por accidente: si como consecuencia de un accidente se produce la muerte del asegurado, NorteHispana pagará al beneficiario el capital estipulado en la póliza.

Muerte por accidente de circulación: si como consecuencia de un accidente de circulación se produce la muerte del asegurado, NorteHispana pagará el capital adicional asegurado estipulado en póliza al beneficiario. 

Invalidez permanente por accidente (baremo): si como consecuencia de un accidente se produce una invalidez permanente NorteHispana pagará el porcentaje del capital asegurado estipulado en póliza.
		
		
		</div>
		<div id="comunidades" hidden>
			<h2>Seguro de comunidades</h2>
			<br><br><h3>1. ¿Qué objeto tiene este seguro?</h3>
			Está diseñado para ofrecer una cobertura completa a las comunidades de propietarios, tanto para el continente como para el contenido.
			<br><br><h3>2. ¿A quién va dirigido?</h3>
			Los destinatarios de este seguro son las comunidades de propietarios y los promotores, una vez ha finalizado el proceso de contrucción.
			<br><br><h3>3. ¿Qué ventajas adicionales tiene el producto?</h3>
			Es compatible con otros seguros del hogar y se aplican interesantes descuentos por motivos de antigüedad y rehabilitación de la vivienda.
		</div>
		
		
		
		
		
	
		
		
		
		
		<br><br>
		
		

	</section>
	
	<footer id="pie">&copy;Copyright by Firecaprycornio</footer>
	</div>
</body>
</html>