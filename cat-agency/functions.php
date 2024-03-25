<?php

require_once get_template_directory() . '/framework/load.php';

function custom_child_scripts() {
	wp_enqueue_style('magnific-popup_css', get_stylesheet_directory_uri() . '/assets/js/magnific-popup.css');
    wp_enqueue_script('magnific-popup_js', get_stylesheet_directory_uri() . '/assets/js/magnific-popup.js', array(), true, true);
}
add_action('wp_enqueue_scripts', 'custom_child_scripts', 100);

add_action('wp_footer', 'add_custom_css');
function add_custom_css() {
	global $current_user;
	?>
	<script>
		jQuery(document).ready(function($) {

    // $("#reqform button.btn-big").click( function(event){
    //   event.preventDefault();
    //   deco_agency.sendmail();
    //   return false; 
    // });

		});
	</script>
	<style>
.error-msg {
  padding-top: 15px;
      font-size: 12px;
          text-transform: uppercase;
}
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
.white-popup {
  position: relative;
  background: #FFF;
  padding: 20px;
  width: auto;
  max-width: 750px;
  margin: 20px auto;
  text-align: center;
  margin-top: 50px;
  padding-top: 50px;
}
.work-item:hover {
	cursor: pointer;
}

.white-popup img {
	width: 100%;
}
.mfp-tag {
	padding: 20px;
    font-size: 14px;
    font-family: "ProximaBold",sans-serif;
    display: block;
    text-transform: uppercase
}
.mfp-url.big {
	font-size: 25px;
    font-family: "ProximaBold",sans-serif;
        margin-top: 20px;
    display: inline-block;
}
.mfp-url.big:after {
    content: "";
    width: 35px;
    height: 2px;
    margin: 10px auto;
    display: block;
    background: black;
}
.mfp-descript {
	    text-align: left;
    margin-left: 221px;
}
.mfp-descript li {
	/*list-style: disc;*/
}
.porto-title {
	padding: 20px;
    font-size: 14px;
    font-family: "ProximaBold",sans-serif;
    display: block;
    text-transform: uppercase;
}
.top-hidden-menu .menu-list li a {
    font-size: 45px;
}
.top-hidden-menu .menu-list li a:before {
    font-size: 45px;
}
.hide {
	display: none;
}
	</style>
	<?php
}