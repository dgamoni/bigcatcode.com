<?php

if ( function_exists( "register_field_group" ) ) {

	$i             = 0;
	$id            = 'advantages';
	$args          = array();
	$fields        = array();
	$args['title'] = 'Дополнительные настройки';


	$fields[] = array(
		'key'           => 'field_' . $id . '_' . ++ $i,
		'label'         => 'Класс иконки',
		'name'          => 'deco_advantages_class_icon',
		'type'          => 'qtranslate_text',
		'instructions'  => '',
		'column_width'  => '',
		'default_value' => '',
	);

	$args['fields']   = $fields;
	$args['location'] = array(
		'rules'    => array(
			0 => array(
				'param'    => 'post_type',
				'operator' => '==',
				'value'    => 'advantages',
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