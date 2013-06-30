<?php

function wp_bootstrap_scripts()
{
    // Register the script like this for a theme:
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/static/js/bootstrap.min.js', array( 'jquery' ) );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'bootstrap' );
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_scripts' );

?>