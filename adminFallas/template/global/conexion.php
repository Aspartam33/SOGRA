<?php
include('config.php');
	$servidor="mysql:dbname=".DB.";host=".SERVIDOR;

	try{
		$pdo= new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
		
	}catch(PDOException $e){
		echo "<script>alert('error');</script>";
	}

?>