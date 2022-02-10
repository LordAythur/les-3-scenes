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
                     <div class="col-xl-12 banner" style="background-image: url('<?php echo get_field('image_banner')['url'] ?>');">
                         <h1>La Compagnie<br>Les 3 Scenes</h1>
                     </div>
                 </div>
             </div>
         </section>
         <section id="compagnie">
            <div class="container-fluid">
                 <div class="row">
                     <div class="col-xl-10 offset-xl-1 titre">
                         <h2>La Compagnie</h2>
                         <span class="background-number">01</span>
                     </div>
                     <div class="content-compagnie">
                        <div class="col-xl-6 offset-xl-1 texte">
                            <p><?php echo get_field('texte_compagnie') ?></p>
                        </div>
                        <div class="col-xl-6 offset-xl-5 image" style="background-image: url('<?php echo get_field('image_compagnie')['url'] ?>');">
                        </div>
                     </div>
                 </div>
             </div>
         </section>
         <span class="border"></span>
         <section id="histoire">
            <div class="container-fluid">
                 <div class="row">
                     <div class="col-xl-10 offset-xl-1 titre">
                         <h2>L'Histoire</h2>
                         <span class="background-number">02</span>
                     </div>
                     <div class="col-xl-8 offset-xl-2 soustitre">
                        <p>Voici l'histoire de la compagnie Les 3 Scènes :</p>
                     </div>
                     <div class="content-compagnie">

                        <div class="col-xl-4 offset-xl-3 texte gauche">
                            <div class="titre">
                                <h3>Nos Comédiens</h3>
                                <span class="little-background-number">1</span>
                            </div>
                            <p><?php echo get_field('nos_comediens')['texte_comediens'] ?></p>
                        </div>
                        <div class="col-xl-4 offset-xl-5 image comediens" style="margin-top: 100px; background-image: url('<?php echo get_field('nos_comediens')['image_comediens']['url'] ?>');">
                        </div>

                        <div class="col-xl-4 offset-xl-5 texte droit">
                            <div class="titre">
                                <h3>La relation</h3>
                                <span class="little-background-number">2</span>
                            </div>
                            <p><?php echo get_field('la_relation')['texte_relation'] ?></p>
                        </div>
                        <div class="col-xl-4 offset-xl-3 image relation" style="background-image: url('<?php echo get_field('la_relation')['image_relation']['url'] ?>');">
                        </div>

                        <div class="col-xl-4 offset-xl-3 texte gauche">
                            <div class="titre">
                                <h3>La relation</h3>
                                <span class="little-background-number">3</span>
                            </div>
                            <p><?php echo get_field('la_creation')['texte_creation'] ?></p>
                        </div>
                        <div class="col-xl-4 offset-xl-5 image creation" style="background-image: url('<?php echo get_field('la_creation')['image_creation']['url'] ?>');">
                        </div>

                        <div class="col-xl-4 offset-xl-5 texte droit">
                            <div class="titre">
                                <h3>Le théâtre</h3>
                                <span class="little-background-number">4</span>
                            </div>
                            <p><?php echo get_field('le_theatre')['texte_theatre'] ?></p>
                        </div>
                        <div class="col-xl-4 offset-xl-3 image theatre" style="background-image: url('<?php echo get_field('le_theatre')['image_theatre']['url'] ?>');">
                        </div>
                     </div>
                 </div>
             </div>
         </section>
     </div>
 </main>

 <?php

 get_footer();