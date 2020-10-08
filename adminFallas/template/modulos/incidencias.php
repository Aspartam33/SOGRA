<?php 

		include('global/conexion.php');
		$sql=$pdo->prepare("SELECT * count(*) totalColas FROM colas");
		$sql->execute();
		$registro=$sql->fetch(PDO::FETCH_ASSOC);
		$totalVentas=$registro['totalVentas'];


?>