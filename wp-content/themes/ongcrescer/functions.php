<?php

require(dirname(__FILE__) . "/functions/post_types.php");
require(dirname(__FILE__) . "/functions/pages.php");
require(dirname(__FILE__) . "/functions/metabox.php");

/**
 * Enqueue scripts and styles.
 */
function ongcrescer_scripts() {
  // Load our main stylesheet.
  wp_enqueue_style( 'ongcrescer-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'ongcrescer_scripts' );

function image_url($image_path){
  echo get_bloginfo('template_url') . "/images/" . $image_path;
}

add_theme_support('post-thumbnails');
?>
