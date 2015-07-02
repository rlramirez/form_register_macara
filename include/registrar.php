<?php
include("../dll/config.php");
include("../dll/clase1.php");
extract($_POST);
$miconexion = new DB_mysql;
$miconexion->conectar($dbname, $dbhost, $dbuname, $dbpass);
$miconexion->consulta("insert into inscritos values('','$nombres','$apellidos','$ceduladni','$email','$tandem','$presicion','$distancia','$pais','$ciudad','$club','$direccion','$seguro','$alergia','$celular','$sangre','$parapente','$homologacion','$colores','$telef1','$telef2','$telef3',NOW())");
echo '<script>alert("Datos guardados")</script>';
echo "<script>location.href='../inscritos.php'</script>";
?>