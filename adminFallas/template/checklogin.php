<?php
session_start();

?>
<?php

 	include 'conexion.php';
 	$conexion = new mysqli($servername,$username,$password,$data_name);
 if ($conecta->connect_error) {
		# code...
		die("La conexion ha fallado".$conecta->connect_error);
	}

 		 $usuario=$_POST['username'];
 		 $password=$_POST['password'];
 		 $sql="SELECT * FROM $tabla_name WHERE nombreUsuario ='$usuario'";
 		 $result=$conexion->query($sql);

 		 if($result->num_rows>0){    }
 		 	$row = $result->fetch_array(MYSQLI_ASSOC);
 		 if ($password==$row['password']){
 		 	$_SESSION['loggedin']=true;
 		 	$_SESSION['username']=$username;
 		 	$_SESSION['start']=time();
 		 	$_SESSION['expire']=$_SESSION['start']+(5*60);
 		 	echo '<script type="text/javascript">alert("Bienvenido'.$_SESSION['username'].'");</script>';
 		 	header('location: http://localhost/adminFallas/template/VistaPanel.php');
 		 }else{
 		 	echo '<script type="text/javascript">alert("Usuario incorrecto");</script>';
 		 	
 		 }



?>