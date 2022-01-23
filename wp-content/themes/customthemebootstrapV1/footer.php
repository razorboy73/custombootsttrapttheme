<footer class="main-footer bg-dark text-white pt-5 pb-3">
    <div class="container">
        <div class="row">
            
                    <?php if ( is_active_sidebar( 'footer_widgets' ) ) : ?>
			      <?php dynamic_sidebar( 'footer_widgets' ); ?>
            <?php endif; ?>
               
        </div>
    </div>
</footer>

<div class="copy bg-dark pb-3 pt-3 border-black">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <p class="small m-0 text-white">Copyright &copy; <?php echo date("Y") ?></p>

            </div>
        </div>

    </div>
</div>

 <!-- Modal -->
 <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sign Up To Get Started</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <input type="text" class="form-control form-control-sm mb-3" placeholder="Your Name" required>
                            <input type="email" class="form-control form-control-sm mb-3" placeholder="Your email" required>
                            <div class="d-grid gap-2">
                                
                                <button class="btn btn-sm btn-success" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                    </svg>
                                    Sign Up to Get Started</button>
                            </div>
                        </form>
                    </div>
                  
                    </div>
                </div>
                </div>


<?php wp_footer()?>

    
</body>
</html>