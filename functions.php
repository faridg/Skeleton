<?php
// Theme setup
function skeletheme_setup(){
// Menus
	register_nav_menus(array(
	'primary' => __('Primary Menu'),
	'footer' => __('Footer Menu')
	));
}

add_action('after_setup_theme', 'skeletheme_setup');