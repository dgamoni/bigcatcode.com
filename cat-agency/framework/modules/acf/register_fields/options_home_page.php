<?php

if ( function_exists( "register_options_page" ) ) {
	$slug   = 'home_page_settings';
	$id     = '13';
	$i      = 0;
	$args   = array();
	$fields = array();

	register_options_page( 'Настройки главной страницы', $slug );


	$args['id']    = $id;
	$args['title'] = '&nbsp;';

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . ++ $i,
		'label'         => 'Контент в шапке',
		'name'          => 'deco_home_page_content_header',
		'type'          => 'qtranslate_wysiwyg',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
	);


	$fields[] = array(
		'key'           => 'field_' . $id . '_' . ++ $i,
		'label'         => 'Заголовок блока What is de:comments?',
		'name'          => 'deco_home_page_what_is_de_title_block',
		'type'          => 'qtranslate_text',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . ++ $i,
		'label'         => 'Контент в блоке What is de:comments?',
		'name'          => 'deco_home_page_what_is_de_content_block',
		'type'          => 'qtranslate_wysiwyg',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . ++ $i,
		'label'         => 'Контент в блоке Get into your de:comments for a low price',
		'name'          => 'deco_home_page_block_get_into',
		'type'          => 'qtranslate_wysiwyg',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
	);


	$fields[] = array(
		'key'           => 'field_' . $id . '_' . ++ $i,
		'label'         => 'Ссылка Follow us Facebook',
		'name'          => 'deco_home_page_link_button_follow_us_fb',
		'type'          => 'qtranslate_text',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . ++ $i,
		'label'         => 'Ссылка Follow us Twitter',
		'name'          => 'deco_home_page_link_button_follow_us_tw',
		'type'          => 'qtranslate_text',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . ++ $i,
		'label'         => 'Ссылка Follow us Google Plus',
		'name'          => 'deco_home_page_link_button_follow_us_google_plus',
		'type'          => 'qtranslate_text',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
	);


	$args['fields']     = $fields;
	$args['location']   =
		array(
			'rules'    =>
				array(
					0 =>
						array(
							'param'    => 'options_page',
							'operator' => '==',
							'value'    => 'acf-options-' . $slug,
							'order_no' => 0,
						),
				),
			'allorany' => 'all',
		);
	$args['options']    =
		array(
			'position'       => 'normal',
			'layout'         => 'default',
			'hide_on_screen' =>
				array(),
		);
	$args['menu_order'] = 0;

	register_field_group( $args );


}


/*if ( function_exists( "register_options_page_sdkjfhjksdh" ) ) {
	$slug   = 'home_page_settings';
	$id     = '13';
	$i      = 0;
	$args   = array();
	$fields = array();

	register_options_page( 'Настройки главной страницы', $slug );


	$args['id']    = $id;
	$args['title'] = 'Шапка';

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'UA Заголовок основного описания мероприятия',
		'name'          => 'event_title_ua',
		'type'          => 'text',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);


	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'EN Заголовок основного описания мероприятия',
		'name'          => 'event_title_en',
		'type'          => 'text',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);


	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'RU Заголовок основного описания мероприятия',
		'name'          => 'event_title_ru',
		'type'          => 'text',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'UA Текст основного мероприятия',
		'name'          => 'event_content_ua',
		'type'          => 'wysiwyg',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'EN Текст основного мероприятия',
		'name'          => 'event_content_en',
		'type'          => 'wysiwyg',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'RU Текст основного мероприятия',
		'name'          => 'event_content_ru',
		'type'          => 'wysiwyg',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'UA Период проведения меропрития',
		'name'          => 'event_period_ua',
		'type'          => 'text',
		'instructions'  => 'Например: 20-22 Февраля',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'EN Период проведения меропрития',
		'name'          => 'event_period_en',
		'type'          => 'text',
		'instructions'  => 'Например: 20-22 Февраля',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'RU Период проведения меропрития',
		'name'          => 'event_period_ru',
		'type'          => 'text',
		'instructions'  => 'Например: 20-22 Февраля',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'UA Место проведения мероприятия',
		'name'          => 'event_place_ua',
		'type'          => 'text',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'EN Место проведения мероприятия',
		'name'          => 'event_place_en',
		'type'          => 'text',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'RU Место проведения мероприятия',
		'name'          => 'event_place_ru',
		'type'          => 'text',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'Ссылка на Google карту места проведения',
		'name'          => 'google_link_place',
		'type'          => 'textarea',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'Ссылка на регистрацию',
		'name'          => 'event_register_link',
		'type'          => 'textarea',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'Приглашенных',
		'name'          => 'event_counts_invited',
		'type'          => 'number',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'Выступающих',
		'name'          => 'event_counts_speakers',
		'type'          => 'number',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'Сколько часов',
		'name'          => 'event_hours',
		'type'          => 'number',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'UA Что будет',
		'name'          => 'event_what_will_ua',
		'type'          => 'wysiwyg',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'EN Что будет',
		'name'          => 'event_what_will_en',
		'type'          => 'wysiwyg',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'RU Что будет',
		'name'          => 'event_what_will_ru',
		'type'          => 'wysiwyg',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'UA Для кого',
		'name'          => 'event_for_whom_ua',
		'type'          => 'wysiwyg',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'EN Для кого',
		'name'          => 'event_for_whom_en',
		'type'          => 'wysiwyg',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'RU Для кого',
		'name'          => 'event_for_whom_ru',
		'type'          => 'wysiwyg',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	// ############ Repeater ########################
	$j = 0;

	$repeater_sub_fields   = array();
	$repeater_sub_fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++ . '_' . $j,
		'label'         => 'Время пограммы',
		'name'          => 'event_programm_time',
		'type'          => 'text',
		'instructions'  => 'Например 20:00',
		'column_width'  => '',
		'default_value' => '',
		'formatting'    => 'html',
		'order_no'      => $j,
	);

	$repeater_sub_fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++ . '_' . $j ++,
		'label'         => 'Текст программы UA',
		'name'          => 'event_programm_text_ua',
		'type'          => 'textarea',
		'instructions'  => '',
		'column_width'  => '',
		'default_value' => '',
		'formatting'    => 'html',
		'order_no'      => $j,
	);

	$repeater_sub_fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++ . '_' . $j ++,
		'label'         => 'Текст программы EN',
		'name'          => 'event_programm_text_en',
		'type'          => 'textarea',
		'instructions'  => '',
		'column_width'  => '',
		'default_value' => '',
		'formatting'    => 'html',
		'order_no'      => $j,
	);

	$repeater_sub_fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++ . '_' . $j ++,
		'label'         => 'Текст программы RU',
		'name'          => 'event_programm_text_ru',
		'type'          => 'textarea',
		'instructions'  => '',
		'column_width'  => '',
		'default_value' => '',
		'formatting'    => 'html',
		'order_no'      => $j,
	);


	$fields[] = array(
		'key'          => 'field_' . $id . '_' . $i ++,
		'label'        => 'Программа мероприятия',
		'name'         => 'event_programm',
		'type'         => 'repeater',
		'instructions' => '',
		'required'     => '0',
		'sub_fields'   => $repeater_sub_fields,
		'row_min'      => '0',
		'row_limit'    => '0',
		'layout'       => 'table',
		'button_label' => 'Добавить',
		'order_no'     => $i,
	);


	// ######### Repeater fields #######################

	$j                     = 0;
	$repeater_sub_fields   = array();
	$repeater_sub_fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++ . '_' . $j ++,
		'label'         => 'RU Год',
		'name'          => 'archive_year_ru',
		'type'          => 'text',
		'instructions'  => 'Например 2014',
		'column_width'  => '',
		'default_value' => '',
		'formatting'    => 'html',
		'order_no'      => $j,
	);

	$repeater_sub_fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++ . '_' . $j ++,
		'label'         => 'EN Год',
		'name'          => 'archive_year_en',
		'type'          => 'text',
		'instructions'  => 'Например 2014',
		'column_width'  => '',
		'default_value' => '',
		'formatting'    => 'html',
		'order_no'      => $j,
	);

	$repeater_sub_fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++ . '_' . $j ++,
		'label'         => 'UA Год',
		'name'          => 'archive_year_ua',
		'type'          => 'text',
		'instructions'  => 'Например 2014',
		'column_width'  => '',
		'default_value' => '',
		'formatting'    => 'html',
		'order_no'      => $j,
	);


	$repeater_sub_fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++ . '_' . $j ++,
		'label'         => 'Ссылка',
		'name'          => 'archive_link',
		'type'          => 'textarea',
		'instructions'  => '',
		'column_width'  => '',
		'default_value' => '',
		'formatting'    => 'html',
		'order_no'      => $j,
	);


	$fields[] =
		array(
			'key'          => 'field_' . $id . '_' . $i ++,
			'label'        => 'Блок Архив в футере',
			'name'         => 'archive_footer',
			'type'         => 'repeater',
			'instructions' => '',
			'required'     => '0',
			'sub_fields'   => $repeater_sub_fields,
			'row_min'      => '0',
			'row_limit'    => '0',
			'layout'       => 'table',
			'button_label' => 'Добавить',
			'order_no'     => $i,
		);


	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'Отключить блок "Что будет" и "Для кого"',
		'name'          => 'block_disable_event_info',
		'type'          => 'true_false',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);


	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'Отключить блок "Новости"',
		'name'          => 'block_disable_event_news',
		'type'          => 'true_false',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);


	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'Отключить блок "Жюри"',
		'name'          => 'block_disable_event_jury',
		'type'          => 'true_false',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'Отключить блок "Программа"',
		'name'          => 'block_disable_event_programm',
		'type'          => 'true_false',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'Отключить блок "Спикеры"',
		'name'          => 'block_disable_event_spikers',
		'type'          => 'true_false',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'Отключить блок "Партнеры"',
		'name'          => 'block_disable_event_partners',
		'type'          => 'true_false',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'Отключить блок "Архив"',
		'name'          => 'block_disable_event_archives',
		'type'          => 'true_false',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'Отключить блок "Отзывы"',
		'name'          => 'block_disable_event_reviews',
		'type'          => 'true_false',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	// 35
	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'Отключить блок "Спонсоры"',
		'name'          => 'block_disable_event_sponsors',
		'type'          => 'true_false',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$fields[] = array(
		'key'           => 'field_' . $id . '_' . $i ++,
		'label'         => 'Отключить блок "Гости"',
		'name'          => 'block_disable_event_guests',
		'type'          => 'true_false',
		'instructions'  => '',
		'required'      => '0',
		'default_value' => '',
		'formatting'    => '',
		'order_no'      => $i,
	);

	$args['fields']     = $fields;
	$args['location']   =
		array(
			'rules'    =>
				array(
					0 =>
						array(
							'param'    => 'options_page',
							'operator' => '==',
							'value'    => 'acf-options-' . $slug,
							'order_no' => 0,
						),
				),
			'allorany' => 'all',
		);
	$args['options']    =
		array(
			'position'       => 'normal',
			'layout'         => 'default',
			'hide_on_screen' =>
				array(),
		);
	$args['menu_order'] = 0;

	register_field_group( $args );

}*/