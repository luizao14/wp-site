<?php

add_action( 'init', 'create_post_type_evento' );
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

add_action( 'init', 'create_post_type_projetos' );
function create_post_type_projetos() {
  register_post_type( 'ong_projetos',
    array(
      'labels' => array(
        'name' => __( 'Projetos' ),
        'singular_name' => __( 'Projetos' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-hammer',
      'rewrite' => array(
        'slug' => 'projetos'
      )
    )
  );
}

add_action( 'init', 'create_post_type_loja' );
function create_post_type_loja() {
  register_post_type( 'loja',
    array(
      'labels' => array(
        'name' => __( 'Loja' ),
        'singular_name' => __( 'Loja' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-cart',
      'rewrite' => array(
        'slug' => 'loja'
      )
    )
  );
}

add_action( 'init', 'create_post_type_voluntario' );
function create_post_type_voluntario() {
  register_post_type( 'ong_voluntario',
    array(
      'labels' => array(
        'name' => __( 'Voluntários' ),
        'singular_name' => __( 'Voluntário' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-groups',
      'rewrite' => array(
        'slug' => 'voluntarios'
      )
    )
  );
}
?>
