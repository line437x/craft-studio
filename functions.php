<?php
	// Snippet from Divi
add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts_styles' );

function dl_enqueue_scripts_styles() {
    $parenthandle = 'divi-style'; 
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'divi-child-theme-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version')
    );
}
?>
