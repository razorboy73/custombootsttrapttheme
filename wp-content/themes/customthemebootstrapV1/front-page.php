<?php



/** 
 * Template Name: Front Page
 * 
 * 
 */
get_header(); ?>

<header class="default-holder main-header">
 <div class="container">
     <div class="row">
         <div class="col-lg-6 col-md-6">
             <div class="banner-text">
                 <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dolor optio quae maxime tenetur, totam et dolore. Autem maiores dolore consequuntur sed cumque, provident hic aspernatur reiciendis maxime cum possimus.</p>
             </div>
         </div>
         <div class="col-lg-6 col-md-6">
             <img src="<?php echo get_template_uri();?>/img/placeholder.jpg" alt="" srcset="">
         </div>
     </div>
 </div>
</header>



<?php get_footer(); ?>