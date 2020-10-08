<?php

	$servername="localhost";
	$username="root";
	$password="";
	$data_name="proyectofinal";
		//conexion
	$conec=mysqli_connect($servername,$username,$password) or die('ha fallado la conexion:'.mysqli_error());
	mysqli_select_db($conec,$data_name)or die('ha fallado la conexion'.mysqli_error());
?>
