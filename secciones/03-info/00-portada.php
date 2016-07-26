<?php
global $paginas_informacion;
$paginas_informacion = get_pages(array("parent"=>get_the_ID()));

if( have_posts() ) {
   while ( have_posts() ) {
      the_post();

      ?>

      <section id="informacion-portada" class="portada rel">
         <div class="imagen fondo w_100 z-1 absUpL imgLiquid imgLiquidFill">
            <?php echo get_the_post_thumbnail(get_the_ID(),'large'); ?>
         </div>

         <div class="cortina z-1 h_100 w_100 absUpL"></div>

         <h1 class="p5">
            Información
         </h1>

         <div class="contenido columns medium-6 large-8 large-offset-2 h_a p2 pt0 pb2 mb1 fontL">
            <?php echo apply_filters( 'the_content', get_the_content()); ?>
         </div>


         <?php

      }
   }
   ?>

   <!-- .row>(.columns.small-6.medium-3>a.h_100.w_100>h4{Título de Sección}+div.imagen.h_50.imgLiquid.imgLiquidFill>img[http://fakeimg.pl/320x240])*4 -->
   <div class="columns medium-6 large-12 p5 pt0 h_40vh">

      <?php foreach ($paginas_informacion as $pagina_informacion ): ?>

         <div class="columns small-6 large-3  h_100 p5 pt0 text-center rel">
            <a href="" class="w_100 h_100">
               <div class="imagen h_50 imgLiquid imgLiquidNoFill">
                  <?php echo get_the_post_thumbnail($pagina_informacion->ID,'medium'); ?>
               </div>
               <div class="texto h_50 w_100 pt1">
                  <div class="vcenter h_a text-center w_100">
                     <h4>
                        <?php echo apply_filters('the_title', $pagina_informacion->post_title); ?>
                     </h4>

                  </div>
               </div>
            </a>
         </div>

      <?php endforeach; ?>

   </div>

</section>
