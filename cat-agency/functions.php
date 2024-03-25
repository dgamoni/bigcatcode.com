<?php

require_once get_template_directory() . '/framework/load.php';

add_action('wp_footer', 'add_custom_css');
function add_custom_css() {
	global $current_user;
	?>
	<script>
		jQuery(document).ready(function($) {

		});
	</script>
	<style>
.fon.blue2 {
	background: #6293d0;
}
.fon.gall {
	background: #f7c329;
}
.fon.girl_tech {
    background: #af02a8;
}
.spoil-wrap {
    height: 600px;
}
.show-more {
	display: none;
}
.show-less {
	display: none;
}
	</style>
	<?php
}