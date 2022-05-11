<?php
/**
 * Template Name: Accueil
 */


 get_header();
 ?>

 <style>
     #breadcrumbs {display: none;}
 </style>

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
                     <div class="col-xl-10 offset-xl-1 titre" data-aos='fade-right' data-aos-delay='100'>
                         <h2>La Compagnie</h2>
                         <span class="background-number">01</span>
                     </div>
                     <div class="content-compagnie" style="overflow-x: hidden">
                        <div class="col-xl-6 offset-xl-1 texte"   data-aos="fade-right" data-aos-delay="300" >
                            <p><?php echo get_field('texte_compagnie') ?></p>
                        </div>
                        <div class="col-xl-6 offset-xl-5 image" style="background-image: url('<?php echo get_field('image_compagnie')['url'] ?>');"   data-aos="fade-left" data-aos-delay="300" >
                        </div>
                     </div>
                 </div>
             </div>
         </section>
         <span class="border"></span>
         <section id="histoire">
            <div class="container-fluid">
                 <div class="row">
                     <div class="col-xl-10 offset-xl-1 titre" data-aos='fade-right' data-aos-delay='100'>
                         <h2>L'Histoire</h2>
                         <span class="background-number">02</span>
                     </div>
                     <div class="col-xl-8 offset-xl-2 soustitre" data-aos='fade-right' data-aos-delay='100'>
                        <p>Voici l'histoire de la compagnie Les 3 Scènes :</p>
                     </div>
                     <div class="content-compagnie" style="overflow-x: hidden">

                        <div class="col-xl-4 offset-xl-3 texte gauche" data-aos="fade-right" data-aos-delay="300" >
                            <div class="titre">
                                <h3>Nos Comédiens</h3>
                                <span class="little-background-number">1</span>
                            </div>
                            <p><?php echo get_field('nos_comediens')['texte_comediens'] ?></p>
                        </div>
                        <div class="col-xl-4 offset-xl-5 image comediens" style="margin-top: 100px; background-image: url('<?php echo get_field('nos_comediens')['image_comediens']['url'] ?>');"  data-aos="fade-left" data-aos-delay="300" >
                        </div>

                        <div class="col-xl-4 offset-xl-5 texte droit"  data-aos="fade-left" data-aos-delay="300" >
                            <div class="titre">
                                <h3>La relation</h3>
                                <span class="little-background-number">2</span>
                            </div>
                            <p><?php echo get_field('la_relation')['texte_relation'] ?></p>
                        </div>
                        <div class="col-xl-4 offset-xl-3 image relation" style="background-image: url('<?php echo get_field('la_relation')['image_relation']['url'] ?>');"  data-aos="fade-right" data-aos-delay="300" >
                        </div>

                        <div class="col-xl-4 offset-xl-3 texte gauche"  data-aos="fade-right" data-aos-delay="300" >
                            <div class="titre">
                                <h3>La relation</h3>
                                <span class="little-background-number">3</span>
                            </div>
                            <p><?php echo get_field('la_creation')['texte_creation'] ?></p>
                        </div>
                        <div class="col-xl-4 offset-xl-5 image creation" style="background-image: url('<?php echo get_field('la_creation')['image_creation']['url'] ?>');"  data-aos="fade-left" data-aos-delay="300" >
                        </div>

                        <div class="col-xl-4 offset-xl-5 texte droit"  data-aos="fade-left" data-aos-delay="300" >
                            <div class="titre">
                                <h3>Le théâtre</h3>
                                <span class="little-background-number">4</span>
                            </div>
                            <p><?php echo get_field('le_theatre')['texte_theatre'] ?></p>
                        </div>
                        <div class="col-xl-4 offset-xl-3 image theatre" style="background-image: url('<?php echo get_field('le_theatre')['image_theatre']['url'] ?>');"  data-aos="fade-right" data-aos-delay="300" >
                        </div>
                     </div>
                 </div>
             </div>
         </section>
     </div>
 </main>

 <?php

 get_footer();