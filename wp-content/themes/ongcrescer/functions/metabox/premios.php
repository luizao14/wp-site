<?php

function premios_meta_box( $meta_boxes ) {
	$prefix = 'premios-';

	$meta_boxes[] = array(
		'id' => 'premios-1',
		'title' => esc_html__( 'Premios', 'metabox-online-generator' ),
		'post_types' => array( 'page' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
                'fields' => array(
			array(
				'id' => $prefix . 'title',
				'type' => 'text',
				'name' => esc_html__( 'Título do Destaque', 'metabox-online-generator' ),
				'desc' => esc_html__( 'Área reservada para escrita do título do destaque', 'metabox-online-generator' ),
				'std' => 'Título do destaque',
				'size' => 40,
			),
			array(
				'id' => $prefix . 'subtitle',
				'type' => 'text',
				'name' => esc_html__( 'Subtítulo do destaque', 'metabox-online-generator' ),
				'desc' => esc_html__( 'Área reservada para escrita do subtítulo', 'metabox-online-generator' ),
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
				'id' => $prefix . 'image-2',
				'type' => 'image_advanced',
				'name' => esc_html__( 'Imagem do Destaque-2', 'metabox-online-generator' ),
				'desc' => esc_html__( 'Imagem de fundo do destaque-2', 'metabox-online-generator' ),
				'max_file_uploads' => '1',
			),
		),
	);

	return $meta_boxes;
}
?>
