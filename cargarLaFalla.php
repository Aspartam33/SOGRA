<!DOCTYPE html>
<html>
<head>
	<title>Cargar Fallas</title>
</head>
<body>

<<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectofinal";

$link=mysqli_connect($servername,$username,$password);
mysqli_select_db($link,$dbname) or die ('La conexion falló'.mysql_error());
mysqli_query($link,'SET foreign_key_checks = 0');
	$conecta=" INSERT INTO colas (cod_trab,cod_falla,fecha_ocu,cancelacion) 
VALUES('$_POST[cod_trab]','$_POST[cod_falla]','$_POST[fecha_ocu]','no') " ;
mysqli_query($link,'SET foreign_key_checks = 1');
if (mysqli_query($link,$conecta)) {
	$conecta1=mysqli_query($link,"SELECT MAX(id) from colas");
	
		$fila= mysqli_fetch_row($conecta1);
  echo "Listo insertado"."tiene el codigo".$fila[0];  //not showing an alert box.
 
	
} else echo ("Error: ".$conecta."<br>". mysqli_error($link));
{
echo ("Error: ".$conecta."<br>". mysqli_error($link));
}
	?> 
<a href="cargarFalla.php">regresar</a>
</body>
</html>