<footer class="main-footer">
       <?php if ( is_active_sidebar( 'home_footer_widget' ) ) : ?>
           <?php dynamic_sidebar( 'home_footer_widget' ); ?>
       <!-- #primary-sidebar -->
           <?php endif; ?>
           <div>

            <?php
           wp_nav_menu(array(
               "theme_location" => "footer-nav",
                'menu'            => '',
                'container'       => 'div',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'menu',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
                'depth' => 0, 
                'walker' => ''
           ));

           ?>
           </div>
           <div class="clearfix"></div>
       </footer>
   </div>
<?php wp_footer();?>
</body>
</html>