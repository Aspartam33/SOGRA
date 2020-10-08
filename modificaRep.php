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
SET cod_trab='$_POST[cod_trab]',cod_falla='$_POST[cod_falla]',fecha_ocu='$_POST[fecha_ocu]',cancelacion='no' WHERE	 id=$id" ;
mysqli_query($link,'SET foreign_key_checks = 1');
if (mysqli_query($link,$sql)) {
	echo "<script type=\"text/javascript\">alert(\"Listo\");</script>";
	echo "<a href=\"cargarFalla.php\">Averías</a>";
	
}else echo "<script type=\"text/javascript\">alert(\"no se pudo\");</script>";
}else echo "<script type=\"text/javascript\">alert(\"No existe\");</script>";  
?>