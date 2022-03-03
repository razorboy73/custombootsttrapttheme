<footer class="main-footer">
       <?php if ( is_active_sidebar( 'home_footer_widget' ) ) : ?>
           <?php dynamic_sidebar( 'home_footer_widget' ); ?>
       <!-- #primary-sidebar -->
           <?php endif; ?>
           <div>

            <?php
        //    wp_nav_menu(array(
        //        "theme_location" => "footer-nav",
        //         'menu'            => '',
        //    ));

           ?>
           </div>
           <div class="clearfix"></div>
       </footer>
   </div>
<?php wp_footer();?>
</body>
</html>