 <!DOCTYPE html>
 <html>
 <head>
    <title>SOGRA|CANTV</title>
 </head>
 <body>
   <header>
      <div class="logo"><a href="indexbienvnido.pho"><img src="img/Logo FJC.svg"></a></div>
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
 <section class="style-1 section-padding">
         <div class="container">
            
            <div class="row">
               <div class="col-md-4">
                  <div class="single-service">
                     <i class="fa fa-star"></i>
                     <h3>Empleados</h3>
                     
                     <a href="" class="border-btn">Abrir</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single-service">
                     <i class="fa fa-lightbulb-o"></i>
                     <h3>Incidencias</h3>
                     
                     <a href="" class="border-btn">Abrir</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single-service">
                     <i class="fa fa-heart"></i>
                     <h3>24/7 Support</h3>
                     <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings.</p>
                     <a href="" class="border-btn">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
 </body>
 </html>

 