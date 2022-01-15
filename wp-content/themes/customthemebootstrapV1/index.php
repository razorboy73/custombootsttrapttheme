<?php get_header(); ?>
<section class="default-holder mt-5">
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-9 col-md-9">
        <div class="list-group">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <a href="#" class="list-group-item list-group-item-action small">
            <div class="row align-items-center">
              <div class="col-lg-4 col-md-4">
                <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" alt="<?php echo get_the_title();?>" >
              </div>
              <div class="col-lg-8 col-md-8">
                <h3 class="fs-5 fw-600"><?php echo get_the_title(); ?></h3> 
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque esse dolores tempore adipisci dolore in minima dolorem? Quas eveniet, assumenda nesciunt velit excepturi modi adipisci! Obcaecati fuga officiis accusamus repudiandae!</p>
              </div>
            </div>
          </a>
          <?php endwhile; else : ?>
	          <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-3 col-md-3"></div>
    </div>
  </div>
</section>

  <?php get_footer(); ?>