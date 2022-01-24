<?php  get_header()?>
<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
?>
<header class="custom-page-header default-holder">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="page-title-heading">
                    <?php echo get_the_title("<h1 class='card'>", " </h1>") ?>
                </div>
            </div>
        </div>
    </div>
</header>

<?php endwhile; else :?>
    <p><?php esc_html_e("Sorry, no posts matched your criteria"); ?></p>
    <?php endif; ?>
<?php get_footer() ?>