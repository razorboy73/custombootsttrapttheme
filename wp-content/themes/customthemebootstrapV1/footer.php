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
                            <input type="text" class="form-control form-control-sm" placeholder="Your Name" required>
                            <input type="email" class="form-control form-control-sm" placeholder="Your email" required>
                            <div class="d-grid gap-2">
                                
                                <button class="btn btn-primary" type="submit">Sign Up to Get Started</button>
                            </div>
                        </form>
                    </div>
                  
                    </div>
                </div>
                </div>


<?php wp_footer()?>

    
</body>
</html>