<?php
/**
 * Template Name: Mentions légales
 */


 get_header();
 ?>

 <main id="primary" class="site-main">
     <div id="page-mentions">
         <section id="mentions">
            <div class="container-fluid">
                 <div class="row">
                     <div class="col-xl-8 offset-xl-2 mention" data-aos='fade-right' data-aos-delay='100'>
                         <h1><?php the_title() ?></h1>
                         <br>
                         <?php the_content() ?>
                     </div>
                 </div>
             </div>
         </section>
     </div>
 </main>

 <?php

 get_footer();