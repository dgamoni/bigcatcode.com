<?php

add_filter( 'woocommerce_enqueue_styles', '__return_false' );
//add_filter( 'woocommerce_enqueue_scripts', '__return_false' );

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

function deco_declension( $int, $expressions, $with_count = false ) {

	if ( count( $expressions ) < 3 ) {
		$expressions[2] = $expressions[1];
	}

	settype( $int, "integer" );

	$count = $int % 100;

	if ( $count > 10 && $count < 20 ) {

		$result = $expressions[2];

	} else {

		$count = $int % 10;

		if ( $count == 1 ) {
			$result = $expressions[0];
		} elseif ( $count > 1 && $count < 5 ) {
			$result = $expressions[1];
		} else {
			$result = $expressions[2];
		}
	}

	if ( $with_count === true ) {
		$result = $int . ' ' . $result;
	}

	return $result;
}


add_action( 'woocommerce_add_to_cart', 'woocommerce_empty_cart_before_add', 0 );

function woocommerce_empty_cart_before_add() {
	global $woocommerce;

	// Get 'product_id' and 'quantity' for the current woocommerce_add_to_cart operation
	$prodId = $_GET["add-to-cart"];


	// Empty cart before adding the new product to the cart
//	WC()->cart->empty_cart(true);
//	do_action( 'woocommerce_cart_emptied' );
//	WC()->cart->add_to_cart( 154 );
//	WC()->session->set( 'cart', array() );

//	$cartItems = WC()->cart->cart_contents;
//
//	foreach ( $cartItems as $k => $v ) {
//		WC()->cart->set_quantity( $k, '0' );
//	}
//
//	WC()->cart->add_to_cart( $prodId );
}

add_filter( 'woocommerce_add_cart_item_data', 'wdm_empty_cart', 10, 3 );
function wdm_empty_cart( $cart_item_data, $product_id, $variation_id ) {
	global $woocommerce;
	$woocommerce->cart->empty_cart();

	// Do nothing with the data and return
	return $cart_item_data;
}

//add_filter( 'woocommerce_checkout_fields', 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {

	unset( $fields['order']['order_comments'] );
	unset( $fields['order']['billing_country'] );

	return $fields;
}

add_action( 'wp_enqueue_scripts', 'child_manage_woocommerce_styles', 999 );
/**
 * Remove WooCommerce Generator tag, styles, and scripts from the homepage.
 * Tested and works with WooCommerce 2.0+
 *
 * @author Greg Rickaby
 * @since  2.0.0
 */
function child_manage_woocommerce_styles() {
	remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );
//	if ( is_front_page() || is_home() ) {
	wp_dequeue_style( 'woocommerce_frontend_styles' );
	wp_dequeue_style( 'woocommerce_fancybox_styles' );
	wp_dequeue_style( 'woocommerce_chosen_styles' );
	wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
	wp_dequeue_script( 'wc_price_slider' );
	wp_dequeue_script( 'wc-single-product' );
	wp_dequeue_script( 'wc-add-to-cart' );
	wp_dequeue_script( 'wc-cart-fragments' );
	wp_dequeue_script( 'wc-checkout' );
	wp_dequeue_script( 'wc-add-to-cart-variation' );
	wp_dequeue_script( 'wc-single-product' );
	wp_dequeue_script( 'wc-cart' );
	wp_dequeue_script( 'wc-chosen' );
	wp_dequeue_script( 'woocommerce' );
	wp_dequeue_script( 'prettyPhoto' );
	wp_dequeue_script( 'prettyPhoto-init' );
	wp_dequeue_script( 'jquery-blockui' );
	wp_dequeue_script( 'jquery-placeholder' );
	wp_dequeue_script( 'fancybox' );
	wp_dequeue_script( 'jqueryui' );
//	}
}


/*  CSS & JS  */
function deco_scripts_style() {
	global $wp_styles;

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', DECO_THEME_URI . 'assets/js/jquery.min.js', array(), '1.0', true );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'plugins-js', DECO_THEME_URI . 'assets/js/plugins.js', array(), '1.0', true );
	wp_enqueue_script( 'custom-js', DECO_THEME_URI . 'assets/js/custom.js', array(), '1.0', true );
	wp_enqueue_script( 'payment-js', DECO_THEME_URI . 'assets/js/payment.js', array(), '1.0', true );

	wp_enqueue_style( 'deco-style', DECO_THEME_URI . 'assets/css/style.css' );

}

add_action( 'wp_enqueue_scripts', 'deco_scripts_style' );


add_filter( 'upload_mimes', 'add_custom_upload_mimes' );
function add_custom_upload_mimes( $existing_mimes ) {
//	$existing_mimes['csv']  = 'application/octet-stream';
//	$existing_mimes['xml']  = 'application/atom+xml';

	$existing_mimes['zip']  = 'application/zip';
	$existing_mimes['gz']   = 'application/x-gzip';
	$existing_mimes['gzip'] = 'application/x-gzip';

	return $existing_mimes;
}


add_action( "template_redirect", 'redirection_function' );
function redirection_function() {
	global $woocommerce;
	if ( preg_match( '/add-to-cart/', $_SERVER['REQUEST_URI'], $match ) ) {
		$request_uri_arr = explode( '/', $_SERVER['REQUEST_URI'] );
		// dietpillsreviews.info/add-to-cart/1302/1544

		echo $product_id = $request_uri_arr[ count( $request_uri_arr ) - 3 ];
		echo $variation_id = $request_uri_arr[ count( $request_uri_arr ) - 2 ];
		if ( $product_id && $variation_id ) {
			WC()->cart->empty_cart();

			$variable_quan = get_post_meta( $variation_id, 'variable_fixed_quan', true );
			if ( empty( $variable_quan ) ) {
				$variable_quan = 1;
			}
			WC()->cart->add_to_cart( $product_id, $variable_quan, $variation_id );
			wp_safe_redirect( '/checkout' );
			dr_check_zip_code_and_email();
		} else {
			wp_safe_redirect( home_url() );
		}
	} else if ( $_SERVER['REQUEST_METHOD'] == 'GET'
	            && preg_match( '/checkout/', $_SERVER['REQUEST_URI'], $match )
	            && ! preg_match( '/order-received/', $_SERVER['REQUEST_URI'], $match )
	            && sizeof( $woocommerce->cart->cart_contents ) == 0
	) {
		wp_safe_redirect( home_url() );
	}
}


// remove the default filter
remove_filter( 'authenticate', 'wp_authenticate_username_password', 20, 3 );
// add custom filter
add_filter( 'authenticate', 'deco_authenticate_username_password', 20, 3 );
function deco_authenticate_username_password( $user, $username, $password ) {

	// If an email address is entered in the username box,
	// then look up the matching username and authenticate as per normal, using that.
	if ( ! empty( $username ) ) {
		$user = get_user_by( 'email', $username );
	}

	if ( isset( $user->user_login, $user ) ) {
		$username = $user->user_login;
	}

	// using the username found when looking up via email
	return wp_authenticate_username_password( null, $username, $password );
}