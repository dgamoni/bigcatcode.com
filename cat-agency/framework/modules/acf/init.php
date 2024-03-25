<?php

define( 'ACF_LITE', true );
define( "OPTIONS_ICON", 'dashicons-admin-settings' );

require_once 'advanced-custom-fields/acf.php';


//add_action('acf/register_fields', 'my_register_fields');

//function my_register_fields()
//{

//}


//add_action( 'acf/register_fields', 'register_fields' );
//function register_fields() {

//require_once 'addons/acf-field-date-time-picker-master/acf-date_time_picker.php';
//require_once 'addons/acf-repeater/acf-repeater.php';
require_once 'addons/acf-qtranslate/acf-qtranslate.php';
require_once 'addons/acf-options-page/acf-options-page.php';
//}


if ( function_exists( "register_field_group" ) ) {

	// Автозагрузка библиотек и функций
	$dirs = array(
		DECO_THEME_FRAMEWORK_PATH . '/modules/acf/register_fields/',
	);

	foreach ( $dirs as $dir ) {
		$custome_fields_init = array();
		if ( is_dir( $dir ) ) {
			if ( $dh = opendir( $dir ) ) {
				while ( false !== ( $file = readdir( $dh ) ) ) {
					if ( $file != '.' && $file != '..' && stristr( $file, '.php' ) !== false ) {
						list( $nam, $ext ) = explode( '.', $file );
						if ( $ext == 'php' ) {
							$custome_fields_init[] = $file;
						}
					}
				}
				closedir( $dh );
			}
		}
		asort( $custome_fields_init );
		foreach ( $custome_fields_init as $other_init ) {
			include_once $dir . $other_init;
		}
	}
}

//include 'register_fields/init_fields.php';
