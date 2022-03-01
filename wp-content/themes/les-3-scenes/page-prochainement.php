<?php
/**
 * Template Name: Prochainement
 */


 get_header();
 ?>

 <main id="primary" class="site-main">
     <div id="page-prochainement">
         <section id="agenda">
            <div class="container-fluid">
                 <div class="row">
                     <div class="col-xl-10 offset-xl-1 titre">
                         <h2>Prochainement</h2>
                         <span class="background-number">AGENDA</span>
                         
                     </div>

                     <div class="col-xl-10 offset-xl-1 calendrier d-flex justify-content-flex-start">
                         <?php echo do_shortcode('[my_calendar]'); ?>                         
                     </div>
                 </div>
             </div>
         </section>
     </div>
 </main>

 <?php

 get_footer();