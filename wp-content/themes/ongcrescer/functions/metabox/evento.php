<?php
function metabox_evento( $meta_boxes ) {
	$prefix = 'evento-';

	$meta_boxes[] = array(
		'id' => 'evento',
		'title' => esc_html__( 'Detalhes do Evento', 'metabox-online-generator' ),
		'post_types' => array( 'ong_event' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
		'fields' => array(
 			array(
 				'id' => $prefix . 'title',
 				'type' => 'text',
 				'name' => esc_html__( 'Título do Destaque', 'metabox-online-generator' ),
 				'desc' => esc_html__( 'Título que será usado no destaque da home', 'metabox-online-generator' ),
 				'std' => 'Título do destaque',
 				'size' => 40,
 			),
 			array(
 				'id' => $prefix . 'subtitle',
 				'type' => 'text',
 				'name' => esc_html__( 'Subtítulo do destaque', 'metabox-online-generator' ),
 				'desc' => esc_html__( 'Subttítulo do destaque da home', 'metabox-online-generator' ),
 				'std' => 'Subtítulo do destaque',
 				'placeholder' => esc_html__( 'Subtítulo do destaque', 'metabox-online-generator' ),
 				'size' => 100,
 			),
 			array(
 				'id' => $prefix . 'image',
 				'type' => 'image_advanced',
 				'name' => esc_html__( 'Imagem do Destaque', 'metabox-online-generator' ),
 				'desc' => esc_html__( 'Imagem de fundo do destaque', 'metabox-online-generator' ),
 				'max_file_uploads' => '1',
 			),
			array(
				'id' => $prefix . 'datetime-from',
				'type' => 'datetime',
				'name' => esc_html__( 'Data e Hora Início do Evento', 'metabox-online-generator' ),
				'desc' => esc_html__( 'Descrição do Evento', 'metabox-online-generator' ),
				'js_options' => array(),
				'inline' => true,
				'timestamp' => true,
			),
			array(
				'id' => $prefix . 'datetime-to',
				'type' => 'datetime',
				'name' => esc_html__( 'Data e Hora Término do Evento', 'metabox-online-generator' ),
				'desc' => esc_html__( 'Descrição do Evento', 'metabox-online-generator' ),
				'js_options' => array(),
				'inline' => true,
				'timestamp' => true,
			)
		)
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'metabox_evento' );
?>
