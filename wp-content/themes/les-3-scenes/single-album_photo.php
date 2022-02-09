<?php
/**
 * Template Name: Single Galerie
 */


 get_header();
 ?>

 <main id="primary" class="site-main">
     <div id="single-galerie">
         <section id="photos">
            <div class="container-fluid">
                 <div class="row">
                     <div class="col-xl-10 offset-xl-1 titre">
                         <h2><?php echo get_the_title() ?></h2>
                         <span class="background-number">GALERIE</span>  
                     </div>
                     <div class="col-xl-10 offset-xl-1 d-flex justify-content-center align-items-center photos">
                        <?php 

                        $count=1;

                        if(!empty(get_field('partie-1'))){
                            foreach(get_field('partie-1') as $photo){
                                if($photo !== false) {
                                    echo "<span class='photo photo".$count."' style='background-image: url(".$photo.")'></span>";
                                    $count = $count + 1;
                                }
                            }
                        }
                        if(!empty(get_field('partie-2'))){
                            foreach(get_field('partie-2') as $photo){
                                if($photo !== false) {
                                    echo "<span class='photo photo".$count."' style='background-image: url(".$photo.")'></span>";
                                    $count = $count + 1;
                                }
                            }
                        }
                        if(!empty(get_field('partie-3'))){
                            foreach(get_field('partie-3') as $photo){
                                if($photo !== false) {
                                    echo "<span class='photo photo".$count."' style='background-image: url(".$photo.")'></span>";
                                    $count = $count + 1;
                                }
                            }
                        }
                        if(!empty(get_field('partie-4'))){
                            foreach(get_field('partie-4') as $photo){
                                if($photo !== false) {
                                    echo "<span class='photo photo".$count."' style='background-image: url(".$photo.")'></span>";
                                    $count = $count + 1;
                                }
                            }
                        }
                        if(!empty(get_field('partie-5'))){
                            foreach(get_field('partie-5') as $photo){
                                if($photo !== false) {
                                    echo "<span class='photo photo".$count."' style='background-image: url(".$photo.")'></span>";
                                    $count = $count + 1;
                                }
                            }
                        }

                        
                        ?>
                    </div>
                 </div>
             </div>
         </section>
     </div>
 </main>

 <?php

 get_footer();