<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="menu.css">
</head>

<header>
      <div class="logo"><a href="bienvenido.php"><img src="img/Logo FJC.svg"></a></div>
      <nav>
         <ul>
         <li class="sub-menu"><a href="secciones/nosotros.html">Incidencia</a>
            <ul>
               <li><a href="#">Cargar</a></li>
               <li><a href="#">Modificar</a></li>
               <li><a href="#">Cerrar</a></li>
               <li><a href="#">Objetivos</a></li>
               <li><a href="#">Principios</a></li>
            </ul>
         </li>
            <li class="sub-menu"><a href="#">Empleados</a>
               <ul>
                  <li><a href="#">Cargar</a></li>
               <li><a href="#">Modificar</a></li>

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