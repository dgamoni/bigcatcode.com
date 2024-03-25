<?php

if ( function_exists( "register_field_group" ) ) {

	$i             = 0;
	$id            = 'road_map';
	$args          = array();
	$fields        = array();
	$args['title'] = 'Дополнительные настройки';


	$fields[] = array(
		'key'           => 'field_' . $id . '_' . ++ $i,
		'label'         => 'Выполнено',
		'name'          => 'deco_road_map_is_status_done',
		'type'          => 'true_false',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . ++ $i,
		'label'         => 'Краткое сообщение сделанного',
		'name'          => 'deco_road_status_done_text',
		'type'          => 'qtranslate_text',
		'instructions'  => 'Например: "Updates are ready"',
		'column_width'  => '',
		'default_value' => 'Updates are ready',
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . ++ $i,
		'label'         => 'Дата планового завершения',
		'name'          => 'deco_road_map_date_end_proccess',
		'type'          => 'qtranslate_text',
		'instructions'  => 'Например: "July 2015"',
		'column_width'  => '',
		'default_value' => 'July 2015',
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . ++ $i,
		'label'         => 'Статус',
		'name'          => 'deco_road_map_status',
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
				'value'    => 'road_map',
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