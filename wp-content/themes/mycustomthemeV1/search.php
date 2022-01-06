<?php get_header() ?>
       
       <section class="content-holder">
           <article class="content">
               <h1>Search results for:<q><?php echo get_search_query( )?></q> </h1>
               <hr>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <!-- Display the Title as a link to the Post's permalink. -->

                        <h2><a href="<?php the_permalink()?>"><?php echo get_the_title();?></a></h2>
                        <p><?php the_excerpt( )?></p>

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