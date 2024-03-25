<?php

function deco_create_new_url_querystring() {
	add_rewrite_rule(
		'my-account/(view-order)/?([0-9]{1,})/?$',
		'index.php?pagename=view-order&order_id=$matches[1]',
		'top'
	);

	add_rewrite_tag( '%order_id%', '([0-9]{1,})' );
}

add_action( 'init', 'deco_create_new_url_querystring', 1 );

