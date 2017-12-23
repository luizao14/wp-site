<?php
function create_post_type_evento() {
  register_post_type( 'ong_event',
    array(
      'labels' => array(
        'name' => __( 'Eventos' ),
        'singular_name' => __( 'Evento' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-calendar-alt',
      'rewrite' => array(
        'slug' => 'eventos'
      )
    )
  );
}

function create_post_type_projetos() {
  register_post_type( 'ong_projetos',
    array(
      'labels' => array(
        'name' => __( 'Projetos' ),
        'singular_name' => __( 'Projetos' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-calendar-alt',
      'rewrite' => array(
        'slug' => 'projetos'
      )
    )
  );
}
add_action( 'init', 'create_post_type_evento' );
add_action( 'init', 'create_post_type_projetos' );


?>
