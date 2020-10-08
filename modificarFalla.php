<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title>Cargar Fallas</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estiloCarga.css">
  <link rel="stylesheet" type="text/css" href="css/estilo2.css">
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
  <script type="text/javascript"> $(document).ready(function(){ $('.menu-toggle').click(function(){ $('nav').toggleClass('active') 
    if($('nav').hasClass('active')) $('.menu-toggle i').removeClass('fas fa-bars').addClass('fas fa-times')
     else $('.menu-toggle i').removeClass('fas fa-times').addClass('fas fa-bars') })
      $('ul li').click(function(){
        $(this).siblings().removeClass('active');
        $(this).toggleClass('active');
      })
      }) </script>
 

<form id="forma" action="modificaRep.php" method="POST">
  <div class="container">
<div id="forma">
  <div class="form-row col-md-3">
     <div class="form-group">
         <label for="selFalla1" id="tipoFalla">Id falla</label>
         <input id="buscar" name="id" type="search" placeholder="Buscar aquí..." autofocus onkeypress="return soloNum(event)">
     </div>
    <div class="form-group">
  
    <label for="selFalla1" id="tipoFalla">Tipo de falla</label>
   <select class="form-control" id="selFalla" name="cod_falla">
   <?php  
   $link=mysqli_connect("localhost","root","");
  mysqli_select_db($link,"proyectofinal");
  $res=mysqli_query($link, "SELECT * from falla");
   //$res=mysqli_query("select cod_falla, descripcion from falla");
  //"<label for=\"tipoFalla\">Select list:</label>";
   while($row=mysqli_fetch_array($res)){
    # code...
   /// if (mysqli_query($link,$res)) {
  echo "<option >".$row[0]." ".$row[1]."</option>";



  }
?></div>
 </select>
 <div class="form-group">
  <label for="sel2">Trabajador:</label>
  <select class="form-control" id="selTrab" name="cod_trab">
    <?php  
   $link=mysqli_connect("localhost","root","");
  mysqli_select_db($link,"proyectofinal");
  $res=mysqli_query($link, "SELECT cod_trab,nombre,apellido from trabajador");
   //$res=mysqli_query("select cod_falla, descripcion from falla");
  //"<label for=\"tipoFalla\">Select list:</label>";
   while($row1=mysqli_fetch_array($res)){
    # code...
   /// if (mysqli_query($link,$res)) {
  echo "<option>".$row1[0]." ".$row1[1]." ".$row1[2]."</option>";



  }
?>
  </select>
</div>
<div class="form-group">
  <label for="calfecha">Ocurrencia:</label>
<input type="date" class="form-control" id="fechaOcu" name="fecha_ocu" placeholder="Fecha de Ocurrencia" required="required" >
</div>
<section class="container">
 <div class="form-group col-md-10">
<div class="boton">
  <div id="botones">
  <button type="submit" class="btn btn-default" onclick="listo()">Subir</button></div>
</div>
  
</div>
</div>
</form>
<script type="text/javascript">//function
  function soloNum(ev) {
    key=ev.keyCode||ev.which
    tecla=String.fromCharCode(key).toLowerCase();
    letras="0123456789"
    especiales="8-37-39-46";
    tecla_especial=false;
    for(var i in especiales){
      if(key==especiales[i]){
        tecla_especial=true;
        break
      }
    }
    if (letras.indexOf(tecla)==-1 && !tecla_especial){
      return false
    }
  
  }</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript">function listo(){
    alert("datos guardados")
  }</script>
</body>
</html>