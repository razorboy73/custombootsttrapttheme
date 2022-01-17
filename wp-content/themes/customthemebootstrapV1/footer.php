<footer class="main-footer bg-dark text-white pt-5 pb-3">
    <div class="container">
        <div class="row">
            
                    <?php if ( is_active_sidebar( 'footer_widgets' ) ) : ?>
			      <?php dynamic_sidebar( 'footer_widgets' ); ?>
            <?php endif; ?>
               
        </div>
    </div>
</footer>



<?php wp_footer()?>

    
</body>
</html>