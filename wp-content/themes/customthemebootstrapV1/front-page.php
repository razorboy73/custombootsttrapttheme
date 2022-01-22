<?php



/** 
 * Template Name: Front Page
 * 
 * 
 */
get_header(); ?>

<header class="default-holder main-header pt-3 pb-3">
 <div class="container">
     <div class="row align-items-center">
         <div class="col-lg-6 col-md-6">
         <?php if ( is_active_sidebar( 'front_page_banner_text' ) ) : ?>
			      <?php dynamic_sidebar( 'front_page_banner_text' ); ?>
            <?php endif; ?>
         </div>
         <div class="col-lg-6 col-md-6">
         <?php if ( is_active_sidebar( 'front_page_banner_image' ) ) : ?>
			      <?php dynamic_sidebar( 'front_page_banner_image' ); ?>
            <?php endif; ?>
             </div>
     </div>
 </div>
</header>



<?php get_footer(); ?>