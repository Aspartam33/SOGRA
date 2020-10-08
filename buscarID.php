<!DOCTYPE html>
<html>
<head>
	<title>Mostrar tablas</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../bootstarp/css/estilo.css">
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectofinal";

$link=mysqli_connect($servername,$username,$password);
mysqli_select_db($link,$dbname) or die ('La conexion falló'.mysql_error());
$texto="";
$registro="";
	if ($_POST){

		$busco=trim($_POST['buscar']);
		$entero=0;
		if (empty($busco)){
			$texto="No existe";
		}else{
			mysqli_set_charset($link,'utf-8');
			$sql="SELECT * FROM colas WHERE id LIKE '%" .$busco. "%' ORDER BY id";
			$res=mysqli_query($link,$sql);
			if (mysqli_num_rows($res)>0) {
				# code...
				$registro="<p>se han encontrado"." ".mysqli_num_rows($res)."registro</p>";
				echo "<div class=\"container\";>";
echo	"<div id=\"miTable\">";
		echo "<table  class=\"table\" >";
		echo "<tr><td>Id<b></b></td><td><b>Codigo de falla</b></td><td><b>Codigo trabajador</b></td><td><b>Fecha ocurrencia</b></td><td><b>Cancelado</b></td>";
				while($fila = mysqli_fetch_assoc($res)){ 
            echo  "<tr><td>".$fila['id']."</td><td>" .$fila['cod_falla']."</td><td>".$fila['cod_trab']."</td><td>".$fila['fecha_ocu']."</td><td>".$fila['cancelacion']."</td></tr>" ;
			 }
			}else $texto="No hay resultados";
			
		}
	}


echo "<a href=\"buscarFalla.html\"> Regresar</a>"
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>