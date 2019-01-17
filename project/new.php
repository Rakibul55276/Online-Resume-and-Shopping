<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

if ( is_page( 'curriculam' ) {
    wp_enqueue_style( 'parent-style', get_template_directory_uri(), '/up.css' );
    }
elseif ( is_page( 'curriculam1') {
    wp_enqueue_style( 'form-style', get_template_directory_uri() .  '/ut.css' );
    }
}
?>