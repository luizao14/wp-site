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

function no_rows_found_function($query)
{ 
  $query->set('no_found_rows', true); 
}

add_action('pre_get_posts', 'no_rows_found_function');

function my_related_posts() {
     $args = array('posts_per_page' => 5, 'post_in'  => get_the_tag_list());
     $the_query = new WP_Query( $args );
     echo '<section id="related_posts">';
     echo '<h2>Posts Relacionados</h2>';
     while ( $the_query->have_posts() ) : $the_query->the_post();
     ?>
     <section class="item">
          <?php if ( has_post_thumbnail() ) { ?>
          <section class="related_post_thumb">
               <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'related-post' ); ?></a>
          </section>
          <?php } else { ?>
          <section class="related_post_thumb">
               <a href="<?php the_permalink(); ?>">
                    <img src="<?php bloginfo('template_directory')?>/lib/images/thumb.png" />
               </a>
          </section>
          <?php } ?>
          <?php the_title(); ?>
      </section>
      <?php
      endwhile;
      echo '<div class="clear"></div></section>';
      wp_reset_postdata();
}
?>
