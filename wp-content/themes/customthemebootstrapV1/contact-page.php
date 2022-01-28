<?php

/**
 * Template Name: Contact Page
 */

 get_header(); ?>

<section class="map-holder default-holder pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col">
            <iframe class="border rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2885.947985749117!2d-79.41610034858455!3d43.6700515790182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34901f06ef99%3A0x420e8b8abb8549f2!2s5%20Olive%20Ave%2C%20Toronto%2C%20ON%20M6G%201T7!5e0!3m2!1sen!2sca!4v1643256691404!5m2!1sen!2sca" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>

<section class="contact-main-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                    <?php if ( is_active_sidebar( 'contact_form' ) ) : ?>
			            <?php dynamic_sidebar( 'contact_form' ); ?>
                    <?php endif; ?>
            </div>
            <div class="col-lg-8 col-md-8">
            $table = get_field( 'hours' );

                if ( ! empty ( $table ) ) {

                    echo '<table border="0">';

                        if ( ! empty( $table['caption'] ) ) {

                            echo '<caption>' . $table['caption'] . '</caption>';
                        }

                        if ( ! empty( $table['header'] ) ) {

                            echo '<thead>';

                                echo '<tr>';

                                    foreach ( $table['header'] as $th ) {

                                        echo '<th>';
                                            echo $th['c'];
                                        echo '</th>';
                                    }

                                echo '</tr>';

                            echo '</thead>';
                        }

                        echo '<tbody>';

                            foreach ( $table['body'] as $tr ) {

                                echo '<tr>';

                                    foreach ( $tr as $td ) {

                                        echo '<td>';
                                            echo $td['c'];
                                        echo '</td>';
                                    }

                                echo '</tr>';
                            }

                        echo '</tbody>';

                    echo '</table>';
                }
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>