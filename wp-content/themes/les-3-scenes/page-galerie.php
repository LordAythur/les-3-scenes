<?php
/**
 * Template Name: Galerie
 */


 get_header();
 ?>

 <main id="primary" class="site-main">
     <div id="page-galerie">
         <section id="albums">
            <div class="container-fluid">
                 <div class="row">
                     <div class="col-xl-10 offset-xl-1 titre" data-aos='fade-right' data-aos-delay='100'>
                         <h2>Nos albums</h2>
                         <span class="background-number">GALERIE</span>
                         
                     </div>
                        <?php 
                        
                        $args = array(
                            'post_type' => 'album_photo',
                            'posts_per_page' => -1,
                            'meta_key' => 'annee',
	                        'orderby' => 'meta_value',
                        );

                        $count = 0;
                        $annee = 0;

                        $query = new WP_Query($args);

                        if ($query->have_posts() ) : 
                            while ( $query->have_posts() ) : $query->the_post();

                            if($annee == get_field('annee') ) {
                                echo "<a href='".get_post_permalink()."'><div class='album album".$count."' style='background-image: url(".get_the_post_thumbnail_url().")'>".get_the_title()."</div></a>";
                                $count = $count + 1;
                                $annee = get_field('annee');
                            } else if($annee !== get_field('annee') ) {
                                echo "</div>";
                                echo "<div class='col-xl-10 offset-xl-1 d-flex justify-content-center'><h3 class='annee-album' data-aos='fade-up' data-aos-delay='100'>".get_field('annee')."</h3></div>";
                                echo "<div class='col-xl-10 offset-xl-1 d-flex justify-content-center align-items-center albums albums".get_field('annee')."' data-aos='fade-up' data-aos-delay='100'>";
                                echo "<a href='".get_post_permalink()."'><div class='album album".$count."' style='background-image: url(".get_the_post_thumbnail_url().")'>".get_the_title()."</div></a>";
                                $count = $count + 1;
                                $annee = get_field('annee');
                            }

                            
                                
                            endwhile;
                            wp_reset_postdata();
                            endif;
                        
                        ?>
                    </div>
                 </div>
             </div>
         </section>
     </div>
 </main>

 <?php

 get_footer();