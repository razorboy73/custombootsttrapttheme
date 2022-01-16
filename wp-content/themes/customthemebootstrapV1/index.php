<?php get_header(); ?>
<section class="default-holder top-margin">
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-9 col-md-9">
        <div class="list-group">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <a href="<?php the_permalink();?>" class="list-group-item list-group-item-action small">
            <div class="row align-items-center">
              <div class="col-lg-4 col-md-4">


              <?php
              if ( has_post_thumbnail() ) { ?>
               <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_title();?>" >
            
           <?php }else{ ?>
             <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" alt="<?php echo get_the_title();?>" >
              
            <?php }
             
              ?>
                </div>
              <div class="col-lg-8 col-md-8">
                <h3 class="fs-5 fw-600"><?php echo get_the_title(); ?></h3> 
                <p><?php echo get_the_excerpt( ) ?></p>
              </div>
            </div>
          </a>
          <?php endwhile; else : ?>
	          <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-3 col-md-3">
          
          <aside class="card sm">
            <h3 class="card-header fs-6">Widget Name</h3>
             <ul class="list-group list-group-flush">
               <li class="list-group-item"><a href="#">Item 1</li>
               <li class="list-group-item"><a href="#">Item 2</li>
               <li class="list-group-item"><a href="#">Item 3</li>
               <li class="list-group-item"><a href="#">Item 4</li>
             </ul>
          </aside>

      </div>
    </div>
  </div>
</section>

  <?php get_footer(); ?>