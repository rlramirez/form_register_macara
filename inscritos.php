<?php 
	include('dll/config.php');
	include('dll/clase1.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?php echo $site_name; ?></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<header>
		<h1><?php echo $site_name; ?></h1>
	</header>
	<nav>
		<a href="../" title="">Home</a>
		<a href="/" title="">Formulario</a>
		<a href="inscritos.php" title="">Inscritos</a>
	</nav>
	<section id="contenedor">
		<h2>Inscritos del evento</h2>
		<?php
			$miconexion = new DB_mysql;
		    $miconexion->conectar($dbname, $dbhost, $dbuname, $dbpass);
		  	//$miconexion->consulta("select * from inscritos");
		  	$miconexion->consulta("select id '#', nombres 'NOMBRES', apellidos 'APELLIDOS', pais 'PAIS', club 'CLUB PERTENECIENTE', parapente 'PARAPENTE', homologacion 'HOLOGOCACION' from inscritos");
		  	$miconexion->verconsulta();
		?>
	</section>
	<hr>
	<footer id="pie">
		Desarrollado por: <a href="http://www.loxatec.com">Loxatec</a> 	
	</footer>
</body>
</html>