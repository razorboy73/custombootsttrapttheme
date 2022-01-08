<?php

//Theme Files

function theme_files(){
    

    wp_enqueue_style( 'bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");

}

add_action( wp_enqueue_scripts, theme_files() );


?>