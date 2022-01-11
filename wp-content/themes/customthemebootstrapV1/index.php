<?php get_header(); ?>
<section class="default-holder">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-9">
        <div class="list-group">
          <a href="#" class="list-group-item">
            <div class="row">
              <div class="col-lg-4 col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" alt="<?php echo get_the_title();?>" >
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-3"></div>
    </div>
  </div>
</section>

  <?php get_footer(); ?>