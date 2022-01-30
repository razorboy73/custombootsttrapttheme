<?php  get_header()?>

<header class="default-holder main-header pt-5 pb-5 border-bottom">
 <div class="container">
     <div class="row align-items-center">
         <div class="col-lg-6 col-md-6">
         <?php if ( is_active_sidebar( 'front_page_banner_text' ) ) : ?>
			      <?php dynamic_sidebar( 'front_page_banner_text' ); ?>
            <?php endif; ?>
            <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#signupModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>
                    Sign Up To Get Started
            </a>
         </div>
    
         <div class="col-lg-6 col-md-6">
         <?php if ( is_active_sidebar( 'front_page_banner_image' ) ) : ?>
			      <?php dynamic_sidebar( 'front_page_banner_image' ); ?>
            <?php endif; ?>
            
             </div>
     </div>


 </div>
</header>
  
<?php get_footer() ?>