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
             <!-- <div class="banner-text">
                 <h1 class="fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dolor optio quae maxime tenetur, totam et dolore. Autem maiores dolore consequuntur sed cumque, provident hic aspernatur reiciendis maxime cum possimus.</p>
             </div> -->
         </div>
         <div class="col-lg-6 col-md-6">
             <img class="img-fluid rounded" src="<?php echo get_template_directory_uri();?>/img/placeholder.jpg" alt="" srcset="">
         </div>
     </div>
 </div>
</header>



<?php get_footer(); ?>