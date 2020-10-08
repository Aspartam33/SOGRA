<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title>Ver trabajadores</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estiloCarga.css">
  <link rel="stylesheet" type="text/css" href="css/estilo2.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>
 <header>
    
    <div class="logo"><a href="#"><img src="http://atodomomento.com/wp-content/uploads/2017/06/Cantv-bloqueo-696x442.jpg"></a></div>
    <nav>
      <ul>
      <li class="sub-menu"><a href="#">Empleados</a>
        <ul>
          <li><a href="formularioTrabajador.html">Nuevo empleado</a></li>
          
          <li><a href="ModificaEmpleado.php">Modificar empleado</a></li>
          <li><a href="VerTrabajadores.php">Ver empleado</a></li>
        </ul>
      </li>
        
        <li class="sub-menu"><a href="#">Incidencias</a>
          <ul>
            <li><a href="cargarFalla.php">Cargar incidencia</a></li>
            <li><a href="buscarFalla.html">Buscar incidencia</a></li>
            <li><a href="modificarFalla.php">Modificar Reporte</a></li>
            <li><a href="cierreFallas.php
              ">Cerrar incidencia</a></li>

          </ul>
        </li>
        
      
        
      </ul></nav>
      <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i> </div>
    

    

  </header>
<div id="tabla">
  <?php
  $link=mysqli_connect("localhost","root","");
  mysqli_select_db($link,"proyectofinal");
  $res=mysqli_query($link, "SELECT * from trabajador");
echo "<div class=\"container\" >";
echo  "<div id=\"miTable\" style=\"color=white;\">";
    echo "<table  class=\"table\" >";
      
        echo "<tr style=\"background-color:blue;\"><td>Id<b></b></td><td><b>Nombre</b></td><td><b>Apellidos</b></td><td><b>Cedula</b></td><td><b>Fecha de nacimiento</b></td><td><b>Fecha de ingreso</b></td><td><b>Salario</b></td></tr>";
        
          while($col=mysqli_fetch_array($res)){
            echo "<div id=\"contTabla\">";
            echo "<tr style=\"background-color:white;\"><td>".$col['cod_trab']."</td><td>".$col['nombre']."</td><td>".$col['apellido']."</td><td>".$col['cedula']."</td><td>".$col['fecha_nac']."</td><td>".$col['fecha_ingreso']."</td><td>".$col['salario']."</td></tr>";
            echo "</div>";
          }
        
      
    echo "</table>";
    echo "<a href=\"actividad03of.html\">regresar</a>";
    
  echo "</div>";
echo "</div>";
?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>