<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectofinal";
if (isset($_POST['cod_trab'])){
	$id=$_POST['cod_trab'];
$link=mysqli_connect($servername,$username,$password);
mysqli_select_db($link,$dbname) or die ('La conexion falló'.mysql_error());
//$sql="SELECT * from colas WHERE id=$id";
//$res=mysqli_query($link,$sql)
mysqli_query($link,'SET foreign_key_checks = 0');
	$sql=" UPDATE trabajador 
SET nombre='$_POST[nombre]',apellido='$_POST[apellido]',cedula='$_POST[cedula]',fecha_nac='$_POST[fecha_nac]',fecha_ingreso='$_POST[fecha_ingreso]',salario'$_POST[salario]' WHERE	 cod_trab=$id" ;
mysqli_query($link,'SET foreign_key_checks = 1');
if (mysqli_query($link,$sql)) {
	echo "<script type=\"text/javascript\">alert(<a href=\"javascript:window.history.back();\">&laquo; \"Datos Actualizados\"</a);</script>";
	
}else echo "<script type=\"text/javascript\">alert(\"no se pudo\");</script>";
}else echo "<script type=\"text/javascript\">alert(\"No existe\");</script>";  
?>