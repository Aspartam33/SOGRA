<!DOCTYPE html>
<html>
<head>
	<title>Cargar Fallas</title>
</head>
<body>
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectofinal";
if (isset($_POST['id'])){
	$id=$_POST['id'];
$link=mysqli_connect($servername,$username,$password);
mysqli_select_db($link,$dbname) or die ('La conexion falló'.mysql_error());
//$sql="SELECT * from colas WHERE id=$id";
//$res=mysqli_query($link,$sql)
mysqli_query($link,'SET foreign_key_checks = 0');
	$sql=" UPDATE colas 
SET cancelacion='$_POST[cancelacion]',fecha_reporte='$_POST[fecha_reporte]' WHERE	 id=$id" ;
mysqli_query($link,'SET foreign_key_checks = 1');
if (mysqli_query($link,$sql)) {
	echo "<script type=\"text/javascript\">alert(<a href=\"javascript:window.history.back();\">&laquo; \"Datos Actualizados\"</a>);</script>";
	
}else echo "<script type=\"text/javascript\">alert(\"no se pudo\");</script>";
}else echo "<script type=\"text/javascript\">alert(\"No existe\");</script>";  
?> 
<a href="cargarFalla.php">regresar</a>
</body>
</html>