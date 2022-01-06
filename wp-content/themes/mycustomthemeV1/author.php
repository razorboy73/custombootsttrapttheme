<?php get_header() ?>
     
       <section class="content-holder">
        <article class="content">  
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <!-- Display the Title as a link to the Post's permalink. -->
                <div class="article">
                    <h1><?php echo single_cat_title( ) ?></h1>
                    <hr>
                        <h2><a href="<?php the_permalink()?>"><?php echo get_the_title();?></a></h2>
                        <p><?php the_excerpt( )?></p>
                        </div>
                <?php endwhile; else : ?>
	            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>




           </article>
           <aside class="sidebar">
           <?php get_sidebar() ?>
           </aside>
           <div class="clearfix"></div>
       </section>
      <?php get_footer() ?>