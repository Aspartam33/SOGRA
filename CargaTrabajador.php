<head>
<TITLE>PHP y Mysql</TITLE>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</HEAD>
<body>
<center>
<h1>Insertar registros</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectofinal";
// Create connection
$conn=mysqli_connect($servername,$username,$password)or die ('ha fallado la conexion:'.mysql_error());
mysqli_select_db($conn,$dbname)or die ('ha fallado la conexion2:'.mysqli_error());
$sql = "INSERT INTO trabajador (nombre,apellido,cedula,fecha_ingreso,fecha_nac,salario)
VALUES ('$_POST[nombre]', '$_POST[apellido]', '$_POST[cedula]','$_POST[fecha_ingreso]','$_POST[fecha_nac]',
'$_POST[salario]')";
if (mysqli_query($conn,$sql)) {
	echo "New record created successfully. Ultimo registro insertado";
	echo "<a href=\"formularioTrabajador.html\">Regresar</a>";
} else 
{
echo ("Error: ".$sql."<br>". mysqli_error($conn));
}
?> 
</center>

</body>
</html>