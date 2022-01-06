<footer class="main-footer">
       <?php if ( is_active_sidebar( 'home_footer_widget' ) ) : ?>
           <?php dynamic_sidebar( 'home_footer_widget' ); ?>
       <!-- #primary-sidebar -->
           <?php endif; ?>
           <div class="clearfix"></div>
       </footer>
   </div>
<?php wp_footer();?>
</body>
</html>