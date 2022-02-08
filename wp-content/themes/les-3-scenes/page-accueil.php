<?php
/**
 * Template Name: Accueil
 */


 get_header();
 ?>

 <main id="primary" class="site-main">
     <div id="page-accueil">
         <section id="entry">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-xl-12 banner">
                         <h1>La Compagnie<br>Les 3 Scenes</h1>
                     </div>
                 </div>
             </div>
         </section>
         <section id="compagnie">
            <div class="container-fluid">
                 <div class="row">
                     <div class="col-xl-8 offset-xl-2 titre">
                         <h2>La Compagnie</h2>
                         <span class="background-number">01</span>
                     </div>
                     <div class="content-compagnie">
                        <div class="col-xl-5 offset-xl-2 texte">
                            <p><?php echo get_field('texte_compagnie') ?></p>
                        </div>
                        <div class="col-xl-5 offset-xl-5 image">
                            <img src="" alt="">
                        </div>
                     </div>
                 </div>
             </div>
         </section>
         <span class="border"></span>
         <section id="compagnie">
            <div class="container-fluid">
                 <div class="row">
                     <div class="col-xl-8 offset-xl-2 titre">
                         <h2>L'Histoire</h2>
                         <span class="background-number">02</span>
                     </div>
                     <div class="content-compagnie">
                        <div class="col-xl-5 offset-xl-2 texte">
                            <p><?php echo get_field('nos_comediens')['texte_comediens'] ?></p>
                        </div>
                        <div class="col-xl-5 offset-xl-5 image" style="background-image: url('<?php echo get_field('nos_comediens')['image_comediens']['url'] ?>');">
                        </div>
                     </div>
                 </div>
             </div>
         </section>
     </div>
 </main>

 <?php

 get_footer();