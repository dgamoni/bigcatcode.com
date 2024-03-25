<?php

if ( function_exists( "register_field_group" ) ) {

	$i             = 0;
	$id            = 'cud';
	$args          = array();
	$fields        = array();
	$args['title'] = 'Дополнительные настройки';

	$fields[] = array(
		'key'          => 'field_' . $id . '_' . ++ $i,
		'label'        => 'Затемняющее изображение',
		'name'         => 'deco_img_hover',
		'type'         => 'image',
		'instructions' => '',
		'required'     => '0',
		'save_format'  => 'url',
	);


	$args['fields']   = $fields;
	$args['location'] = array(
		'rules'    => array(
			0 => array(
				'param'    => 'post_type',
				'operator' => '==',
				'value'    => 'cud',
				'order_no' => 0,
				'group_no' => 1
			),
		),
		'allorany' => 'all',
	);

	$args['options']    = array(
		'position'       => 'normal',
		'layout'         => 'default',
		'hide_on_screen' => array(),
	);
	$args['menu_order'] = 0;

	register_field_group( $args );


}