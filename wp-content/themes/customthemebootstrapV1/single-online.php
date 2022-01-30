<?php  get_header()?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="default-holder main-header pt-5 pb-5 border-bottom">
 <div class="container">
     <div class="row align-items-center">
         <div class="col-lg-6 col-md-6">
            <div class="course-excerpt small">
                <h1 class="fs-5 fw-6--"><?php echo get_the_title(); ?></h1>
                <p><?php echo get_the_excerpt(); ?></p>
                
            </div>

            <a href="<?php the_field("course_link")?>" target="_blank" class="btn btn-success btn-small"> Sign up now</a>
         </div>
    
         <div class="col-lg-6 col-md-6">
                <?php
                    if ( has_post_thumbnail() ) { ?>
                    <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_title();?>" >
                    
                <?php }else{ ?>
                    <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" alt="<?php echo get_the_title();?>" >
                    
                <?php } ?>
             </div>
     </div>
 

 </div>
</header>
<section class="course_cat border-top pt-3 pb-3">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="course_cat_text text-center small">
                    <?php if ( is_active_sidebar( 'course_cat_text' ) ) : ?>
			            <?php dynamic_sidebar( 'course_cat_text' ); ?>
                    <?php endif; ?>
                    <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#signupModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg>
                    Sign Up To Get Started
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-3">
            <div class="col-lg-3 col-md-3">
                <a href="#" class="card text-decoration-none text-dark text-center mb-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Job-Oriented-Courses-in-Bangalore.jpg" alt="Job Orientated Courses">
                    <div class="card-body">
                        <h3 class="m-0 fs-6 fw-600">Job Orientated Courses</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3">
                <a href="#" class="card text-decoration-none text-dark text-center mb-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Certification-Courses-in-Bangalore.jpg" alt="Certification Courses">
                    <div class="card-body">
                        <h3 class="m-0 fs-6 fw-600">Certification Courses</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3">
                <a href="#" class="card text-decoration-none text-dark text-center mb-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Online-Courses-in-Bangalore.jpg" alt="nline Courses">
                    <div class="card-body">
                        <h3 class="m-0 fs-6 fw-600">Online Courses</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3">
                <a href="#" class="card text-decoration-none text-dark text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Short-Term-Courses-in-Bangalore.jpg" alt="Short Term Courses">
                    <div class="card-body">
                        <h3 class="m-0 fs-6 fw-600">Short Term Courses</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="services border-top mb-5">
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-6">
                    <div class="course_cat_text text-center small">
                        <?php if ( is_active_sidebar( 'services_text' ) ) : ?>
                            <?php dynamic_sidebar( 'services_text' ); ?>
                        <?php endif; ?>
                        <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#signupModal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                        Sign Up To Get Started
                        </a>
                    </div>
                </div>
         </div>
     </div>
</section>





<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer() ?>