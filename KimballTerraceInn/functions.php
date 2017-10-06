<?php

//add_action( 'after_setup_theme', 'be_themes_child_theme_setup' );
//function be_themes_child_theme_setup() {
    load_child_theme_textdomain( 'be-themes', get_stylesheet_directory() . '/languages' );
//}

// function be_restore_default_gallery() {
// remove_shortcode('gallery');
// add_shortcode('gallery','gallery_shortcode');
// remove_shortcode('video');
// add_shortcode('video','wp_video_shortcode');
// }
// add_action( 'init', 'be_restore_default_gallery');

  require_once(get_stylesheet_directory().'/custom/branding.php');
  require_once(get_stylesheet_directory().'/custom/bottom-CTA.php');

/* add stylesheet for gravity forms printing entries */
add_filter( 'gform_print_styles', 'add_styles', 10, 2 );
function add_styles( $value, $form ) {

    $forms = array( '1' );

    if ( ! in_array( $form['id'], $forms ) ) {
        return $value;
    }

    wp_register_style( 'print_entry', get_stylesheet_directory_uri() . '/gforms_print.css' );

    return array( 'print_entry' );

}
?>
